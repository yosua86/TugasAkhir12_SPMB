<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftarController extends Controller
{
    public function all(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            // dump($item);
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        // die;
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.all', compact('grafik'));
    }

    public function pmdk(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->where('t_pendaftar.jalur_pendaftaran_id',4)
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.pmdk', compact('grafik'));
    }

    public function usm1(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->where('t_pendaftar.jalur_pendaftaran_id',1)
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.usm1', compact('grafik'));
    }

    public function usm2(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->where('t_pendaftar.jalur_pendaftaran_id',2)
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.usm2', compact('grafik'));
    }

    public function usm3(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->where('t_pendaftar.jalur_pendaftaran_id',3)
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->get();
        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.usm3', compact('grafik'));
    }

    public function filter(Request $request)
    {
        $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
        ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
        ->join('t_r_gelombang_pendaftaran','t_pendaftar.gelombang_pendaftaran_id','=','t_r_gelombang_pendaftaran.gelombang_pendaftaran_id')
        ->where('t_pendaftar.jalur_pendaftaran_id',3)
        ->where('t_r_gelombang_pendaftaran.tahun',2014)
        ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id');

        $arr = array();
        foreach($data as $item){
            $temp = array
            (
                "jalur_pendaftaran" => $item->desc,
                "total" => $item->total,
            );
            array_push($arr,$temp);
        }
        $grafik = json_encode($arr);
        return view('page.web.pendaftar.usm3', compact('grafik'));

}
public function filter1(Request $request)
{
    $data = Pendaftar::select('t_pendaftar.jalur_pendaftaran_id','t_pendaftar.user_id as pendaftar_user_id','t_r_jalur_pendaftaran.jalur_pendaftaran_id as jalur_pendaftaran_jalur_pendaftaran_id','t_r_jalur_pendaftaran.desc as desc',DB::raw('count(*) as total'))
    ->join('t_r_jalur_pendaftaran','t_pendaftar.jalur_pendaftaran_id','=','t_r_jalur_pendaftaran.jalur_pendaftaran_id')
    ->join('t_r_gelombang_pendaftaran','t_pendaftar.gelombang_pendaftaran_id','=','t_r_gelombang_pendaftaran.gelombang_pendaftaran_id')
    ->where('t_pendaftar.jalur_pendaftaran_id',3)
    ->where('t_r_gelombang_pendaftaran.tahun',2015)
    ->groupBy('t_r_jalur_pendaftaran.jalur_pendaftaran_id');
    
    $arr = array();
    foreach($data as $item){
        $temp = array
        (
            "jalur_pendaftaran" => $item->desc,
            "total" => $item->total,
        );
        array_push($arr,$temp);
    }
    $grafik = json_encode($arr);
    return view('page.web.pendaftar.usm3', compact('grafik'));
}
}