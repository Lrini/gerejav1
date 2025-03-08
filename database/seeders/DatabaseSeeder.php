<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\renungan;
use App\Models\kegiatan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create();

        // Buat data renungan
        Renungan::factory()->count(5)->create();

        // Buat data kegiatan
        Kegiatan::factory()->count(5)->create();
       
    }
}
