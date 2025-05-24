<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class renungan extends Model
{
    use HasFactory;
    //mendefinisikan nama tabel
    protected $table = 'renungans';
    //mendefinisikan kolom yang dapat diisi
    protected $fillable = ['judul','ayat','isi','tanggal','slug'];

   public function user()
    {
        //// Mendefinisikan relasi dengan model User
        // Setiap renungan dimiliki oleh satu user
        // dan setiap user dapat memiliki banyak renungan
        return $this->belongsTo(User::class);
    }

}
