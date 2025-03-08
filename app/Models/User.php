<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\renungan;
use App\Models\kegiatan;

class User extends Authenticatable
{
    
    use HasFactory;
    //relasi one to many ke model renungan
    public function renungans()
    {
        return $this->hasMany(renungan::class);
    }
    //relasi one to many ke model kegiatan
    public function kegiatans()
    {
        return $this->hasMany(kegiatan::class);
    } 
}
