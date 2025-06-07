<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;
use App\Models\User;
class Renungancontroller extends Controller
{
   //menampilkan renungan dari database
    public function index()
    {
        //mengambil data renungan dan user
        $renungans = Renungan::with('user')->orderBY('tanggal', 'desc')->take(5)->get(); //ambil 5 renungan terbaru
        return view('renungan',compact('renungans'));
    }

    //menampilkan renungan berdasarkan id
    public function show($id)
    {
        //menampilkan renungan berdasarkan id
        $renungan = Renungan::findOrFail($id);
        return view('renungan', compact('renungan')); //compact digunakan untuk mengirim data ke view
    }
}
