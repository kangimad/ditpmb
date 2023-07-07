<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Fiqh Ubudiyah',
                'slug_kategori' => 'fiqh-ubudiyah',
            ],
            [
                'nama_kategori' => 'Fiqh Muamalah',
                'slug_kategori' => 'fiqh-muamalah',
            ],
            [
                'nama_kategori' => 'Fiqh Nikah',
                'slug_kategori' => 'fiqh-nikah',
            ],
        ]);
    }
}
