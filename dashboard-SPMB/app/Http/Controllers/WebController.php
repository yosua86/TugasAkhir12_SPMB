<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class WebController extends Controller
{
    public function dashboard(){
        return view('page.web.home.main');
    }

    public function pendaftar(){
        return view('page.web.home.pendaftar');
    }
 
    public function lulus(){
        return view('page.web.home.lulus');
    }
 
    public function perbandingan(){
        $data = Mahasiswa::get('jenis_kelamin_id');
        $laki = $data->where('jenis_kelamin_id', 0)->count();
        $perempuan =  $data->where('jenis_kelamin_id', 1)->count();
        return view('page.web.home.perbandingan', compact('data', 'laki','perempuan'));
    }
 
    public function ulang(){
        return view('page.web.home.ulang');
    }
    
    public function usm3(Request $request){
        $data = Mahasiswa::select('t_calon_mahasiswa.jurusan_id','t_r_jurusan.jurusan_id as jurusan_jurusan_id','t_r_jurusan.fakultas_id as jurusan_fakultas_id','t_r_jurusan.nama as jurusan_nama','t_r_jurusan.prefix_nim as jurusan_prefix_nim','t_r_jurusan.counter_nim as jurusan.counter_nim','t_r_jurusan.status_active as jurusan.status_active','t_r_jurusan.url as jurusan.url','t_r_jurusan.desc as jurusan.desc','t_r_jurusan.afis_id as jurusan.afis_id',DB::raw('count(*) as total'))
        ->join('t_r_jurusan','t_calon_mahasiswa.jurusan_id','=','t_r_jurusan.jurusan_id')
        ->groupBy('t_r_jurusan.jurusan_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jurusan" => $item->jurusan_nama,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.home.usm3', compact('grafik'));
    }
 
    public function pmdk(Request $request){
        $count = Mahasiswa::where('jalur_pendaftaran_id',4)->count();
        $data = Mahasiswa::where('jalur_pendaftaran_id',4)->get();
        return view('page.web.home.ulang', compact('count','data'));
    }
}
