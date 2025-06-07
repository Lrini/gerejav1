<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class KegiatanController extends Controller
{
    //menampilkan daftar kegiatan
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }
    //menampilkan kegiatan dari database berdasarakan id
    public function show($id)
    {
        //menampilkan kegiatan berdasarkan id
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan', compact('kegiatan')); //compact digunakan untuk mengirim data ke view
    }
}
