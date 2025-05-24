<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RenunganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // //untuk membuat data dummy pada tabel renungan
        // //dengan menggunakan faker untuk mengisi data secara acak
        // //user_id diisi dengan 1, karena kita asumsikan user dengan id 1 sudah ada
        // //dan akan digunakan untuk membuat renungans
        return [
            'user_id' => 1,
            'judul' => $this->faker->sentence(),
            'ayat' => $this->faker->sentence(),
            'isi' => $this->faker->paragraph(),
            'tanggal' => $this->faker->date,
            'slug' => $this->faker->slug,
        ];
    }
}
