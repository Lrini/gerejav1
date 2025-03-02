<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class renungan extends Model
{
    use HasFactory;
    //mendefinisikan nama tabel
    protected $table = 'renungans';
    //mendefinisikan kolom yang dapat diisi
    protected $fillable = ['judul','ayat','isi','tanggal'];

}
