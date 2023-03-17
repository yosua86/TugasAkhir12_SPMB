<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LulusController extends Controller
{
    public function all(Request $request)
    {
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
        return view('page.web.lulus.all', compact('grafik'));
    }

    public function pmdk(Request $request)
    {
        $data = Mahasiswa::select('t_calon_mahasiswa.jurusan_id','t_r_jurusan.jurusan_id as jurusan_jurusan_id','t_r_jurusan.fakultas_id as jurusan_fakultas_id','t_r_jurusan.nama as jurusan_nama','t_r_jurusan.prefix_nim as jurusan_prefix_nim','t_r_jurusan.counter_nim as jurusan.counter_nim','t_r_jurusan.status_active as jurusan.status_active','t_r_jurusan.url as jurusan.url','t_r_jurusan.desc as jurusan.desc','t_r_jurusan.afis_id as jurusan.afis_id',DB::raw('count(*) as total'))
        ->join('t_r_jurusan','t_calon_mahasiswa.jurusan_id','=','t_r_jurusan.jurusan_id')
        ->where('jalur_pendaftaran_id',4)
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
        return view('page.web.lulus.pmdk', compact('grafik'));
    }

    public function usm1(Request $request)
    {
        $data = Mahasiswa::select('t_calon_mahasiswa.jurusan_id','t_r_jurusan.jurusan_id as jurusan_jurusan_id','t_r_jurusan.fakultas_id as jurusan_fakultas_id','t_r_jurusan.nama as jurusan_nama','t_r_jurusan.prefix_nim as jurusan_prefix_nim','t_r_jurusan.counter_nim as jurusan.counter_nim','t_r_jurusan.status_active as jurusan.status_active','t_r_jurusan.url as jurusan.url','t_r_jurusan.desc as jurusan.desc','t_r_jurusan.afis_id as jurusan.afis_id',DB::raw('count(*) as total'))
        ->join('t_r_jurusan','t_calon_mahasiswa.jurusan_id','=','t_r_jurusan.jurusan_id')
        ->where('jalur_pendaftaran_id',1)
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
        return view('page.web.lulus.usm1', compact('grafik'));
    }

    public function usm2(Request $request)
    {
        $data = Mahasiswa::select('t_calon_mahasiswa.jurusan_id','t_r_jurusan.jurusan_id as jurusan_jurusan_id','t_r_jurusan.fakultas_id as jurusan_fakultas_id','t_r_jurusan.nama as jurusan_nama','t_r_jurusan.prefix_nim as jurusan_prefix_nim','t_r_jurusan.counter_nim as jurusan.counter_nim','t_r_jurusan.status_active as jurusan.status_active','t_r_jurusan.url as jurusan.url','t_r_jurusan.desc as jurusan.desc','t_r_jurusan.afis_id as jurusan.afis_id',DB::raw('count(*) as total'))
        ->join('t_r_jurusan','t_calon_mahasiswa.jurusan_id','=','t_r_jurusan.jurusan_id')
        ->where('jalur_pendaftaran_id',2)
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
        return view('page.web.lulus.usm2', compact('grafik'));
    }

    public function usm3(Request $request)
    {
        $data = Mahasiswa::select('t_calon_mahasiswa.jurusan_id','t_r_jurusan.jurusan_id as jurusan_jurusan_id','t_r_jurusan.fakultas_id as jurusan_fakultas_id','t_r_jurusan.nama as jurusan_nama','t_r_jurusan.prefix_nim as jurusan_prefix_nim','t_r_jurusan.counter_nim as jurusan.counter_nim','t_r_jurusan.status_active as jurusan.status_active','t_r_jurusan.url as jurusan.url','t_r_jurusan.desc as jurusan.desc','t_r_jurusan.afis_id as jurusan.afis_id',DB::raw('count(*) as total'))
        ->join('t_r_jurusan','t_calon_mahasiswa.jurusan_id','=','t_r_jurusan.jurusan_id')
        ->where('jalur_pendaftaran_id',3)
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
        return view('page.web.lulus.usm3', compact('grafik'));
    }

}
