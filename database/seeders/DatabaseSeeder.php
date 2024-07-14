<?php

namespace Database\Seeders;

use App\Models\Pengunjung;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Pengunjung::create([
            'nik' => "1771089239293",
            'nama' => "Gilang",
            'no_handphone' => "08954127915959",
            'jenkel' => 1,
            'alamat' => "Jl. In Aja Dulu",
            'password' => bcrypt('12345678'),
            'image' => ""
        ]);

        Pengunjung::create([
            'nik' => "17710892232131",
            'nama' => "Arif",
            'no_handphone' => "0847824728472",
            'jenkel' => 1,
            'alamat' => "Jl. In Aja Dulu",
            'password' => bcrypt('12345678'),
            'image' => ""
        ]);
    }
}
