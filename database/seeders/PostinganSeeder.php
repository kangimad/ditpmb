<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('postingan')->insert([
            [
                'judul_postingan' => 'Postingan1',
                'kategori_id' => 1,
                'slug_postingan' => 'postingan-1',
                'penulis_postingan' => 'Penulis1',
                'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
                'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
            ],
            [
                'judul_postingan' => 'Postingan2',
                'kategori_id' => 2,
                'slug_postingan' => 'postingan-2',
                'penulis_postingan' => 'Penulis2',
                'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
                'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
            ],
            [
                'judul_postingan' => 'Postingan3',
                'kategori_id' => 3,
                'slug_postingan' => 'postingan-3',
                'penulis_postingan' => 'Penulis3',
                'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
                'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
            ]
        ]);
    }
}
