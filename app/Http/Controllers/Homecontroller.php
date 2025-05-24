<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use App\Models\renungan;

class Homecontroller extends Controller
{
    public function index()
    {
        //mengambil data renungan dan user
        $renungans = renungan::with('user')->orderBY('tanggal', 'desc')->take(1)->get(); //ambil 5 renungan terbaru
        //mengambil data renungan dan kegiatan 
        //$renungans = renungan::orderBY('tanggal', 'desc')->take(1)->get(); //ambil 5 renungan terbaru
       // $kegiatans = kegiatan::orderBY('waktu', 'desc')->take(5)->get(); //ambil 5 kegiatan terbaru
        //mengambil data kegiatan dan user
        $kegiatans = kegiatan::with('user')->orderBY('waktu', 'desc')->get(); //ambil semua kegiatan terbaru 

       
       return view('home',compact('renungans','kegiatans'));
    }
}
