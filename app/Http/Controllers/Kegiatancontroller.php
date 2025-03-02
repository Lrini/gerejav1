<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;

class Kegiatancontroller extends Controller
{
    //menampilkan daftar kegiatan
    public function index()
    {
        $kegiatan = Kegiatan :: all();//
        return view('kegiatan.index',compact('kegiatans '));    //kegiatans -> kegiatan
    }
    //menampilkan form untuk membuat kegiatan baru
    public function create()
    {
        return view('kegiatan.create');
    }
    //menyimpan kegiatan baru   
    public function store(Request $request)     
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
        ]);
        Kegiatan::create($request->all());
        return redirect()->route('kegiatan.index')
            ->with('success','Kegiatan berhasil ditambahkan');
    }
    //menampilkan kegiatan tertentu
    public function show(Kegiatan $kegiatan)
    {
        return view('kegiatan.show',compact('kegiatan   '));  
    }
    //menampilkan form untuk mengedit kegiatan
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit',compact('kegiatan   '));  
    }
    //mengupdate kegiatan
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            'nama_kegiatan' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'deskripsi' => 'required',
        ]);
        $kegiatan->update($request->all());
        return redirect()->route('kegiatan.index')
            ->with('success','Kegiatan berhasil diupdate');
    }
    //menghapus kegiatan
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')
            ->with('success','Kegiatan berhasil dihapus');
    }       
}
