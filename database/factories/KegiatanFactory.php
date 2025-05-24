<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KegiatanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //untuk membuat data dummy pada tabel kegiatan
        //dengan menggunakan faker untuk mengisi data secara acak
        //user_id diisi dengan 1, karena kita asumsikan user dengan id 1 sudah ada
        //dan akan digunakan untuk membuat kegiatan
        //nama, deskripsi, waktu, slug, dan tempat diisi dengan data acak
        //untuk slug, kita menggunakan faker untuk membuat slug dari nama kegiatan
        return [
            'user_id' => 1,
            'nama' => $this->faker->sentence(),
            'deskripsi' => $this->faker->paragraph(),
            'waktu' => $this->faker->date,
            'slug' => $this->faker->slug,
            'tempat' => $this->faker->sentence(),
        ];
    }
}
