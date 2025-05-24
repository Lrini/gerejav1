<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\User;

class kegiatan extends Model
{
    use HasFactory;
    //mendefinisikan nama tabel
    protected $table = 'kegiatans';
    //mendefinisikan kolom yang dapat diisi
    protected $fillable = ['nama','deskripsi','waktu','slug'];

    public function user()
    {
        // mendefinisikan relasi antara kegiatan dan user
        // setiap kegiatan dimiliki oleh satu user
        // dan setiap user dapat memiliki banyak kegiatan
        return $this->belongsTo(user::class);
    }
}
