<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Postingan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(5)->create();

        // Kategori::factory(5)->create();

        Postingan::factory(50)->create();

        // DB::table('users')->insert(
        //     [
        //         [
        //             'name' => 'user1',
        //             'email' => 'user1@gmail.com',
        //             'password' => bcrypt(12345),
        //         ], [
        //             'name' => 'user2',
        //             'email' => 'user2@gmail.com',
        //             'password' => bcrypt(12345),
        //         ], [
        //             'name' => 'user3',
        //             'email' => 'user3@gmail.com',
        //             'password' => bcrypt(12345),
        //         ],
        //     ]
        // );

        DB::table('kategori')->insert(
            [
                [
                    'nama' => 'Web Developer',
                ],
                [
                    'nama' => 'Personal',
                ],
                [
                    'nama' => 'Sport',
                ],
                [
                    'namai' => 'Art',
                ],
                [
                    'namai' => 'Photographer',
                ],
            ]
        );

        // DB::table('postingan')->insert(
        //     [
        //         [
        //             'judul_postingan' => 'Postingan1',
        //             'kategori_id' => 1,
        //             'user_id' => 1,
        //             'slug_postingan' => 'postingan-1',
        //             'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
        //             'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
        //         ],
        //         [
        //             'judul_postingan' => 'Postingan2',
        //             'kategori_id' => 2,
        //             'user_id' => 2,
        //             'slug_postingan' => 'postingan-2',
        //             'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
        //             'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
        //         ],
        //         [
        //             'judul_postingan' => 'Postingan3',
        //             'kategori_id' => 3,
        //             'user_id' => 3,
        //             'slug_postingan' => 'postingan-3',
        //             'ringkasan_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia suscipit fugiat culpa a corrupti, tenetur aspernatur est autem consequatur reiciendis nobis eius aliquid, tempora numquam!',
        //             'isi_postingan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi hic mollitia reprehenderit sapiente saepe doloremque quia totam porro tempore ullam fugiat quis, exercitationem facilis, magnam ut quasi excepturi aliquam fugit omnis atque ea! Suscipit nihil ea velit? Animi, amet. Voluptatibus nam cupiditate ipsum nobis atque modi quaerat dignissimos nihil! Earum voluptate deleniti laboriosam aperiam. Porro reprehenderit enim repellat debitis, quidem veritatis deserunt quas libero non numquam quibusdam tempore et necessitatibus eaque aliquam adipisci modi unde illo. Explicabo aliquam, numquam eaque, quam harum possimus voluptatum perferendis distinctio adipisci, voluptas iste dolorum exercitationem unde illo laboriosam tenetur natus? Maxime eaque fugiat praesentium!'
        //         ]
        //     ]
        // );
    }
}
