<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postingan>
 */
class PostinganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 5)),
            'slug' => $this->faker->slug(),
            'ringkasan' => $this->faker->paragraph(),
            'isi' => collect($this->faker->paragraphs(mt_rand(7, 9)))->map(fn ($p) => "<p>$p</p>")->implode(''),
            'kategori_id' => mt_rand(1, 5),
            'user_id' => mt_rand(1, 5),
        ];
    }
}
