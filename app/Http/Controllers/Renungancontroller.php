<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Renungan;

class Renungancontroller extends Controller
{
    //menampilkan daftar renungan
    public function index()
    {
        $renungan = Renungan :: all();
        return view('renungan.index',compact('renungans'));
    }

    //menampilkan form untuk membuat renungan baru
    public function create()
    {
        return view('renungan.create');
    }

    //menyimpan renungan baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'ayat' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
        ]);

        Renungan::create($request->all());
        return redirect()->route('renungan.index')
            ->with('success','Renungan berhasil ditambahkan');
    }

    //menampilkan renungan tertentu
    public function show(Renungan $renungan)
    {
        return view('renungan.show',compact('renungan'));
    }

    //menampilkan form untuk mengedit renungan
    public function edit(Renungan $renungan)
    {
        return view('renungan.edit',compact('renungan'));
    }
    //mengupdate renungan
    public function update(Request $request, Renungan $renungan)
    {
        $request->validate([
            'judul' => 'required',
            'ayat' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
        ]);

        $renungan->update($request->all());
        return redirect()->route('renungan.index')
            ->with('success','Renungan berhasil diupdate');
    }

    //menghapus renungan
    public function destroy(Renungan $renungan)
    {
        $renungan->delete();
        return redirect()->route('renungan.index')
            ->with('success','Renungan berhasil dihapus');
    }
}
