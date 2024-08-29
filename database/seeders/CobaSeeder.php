<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory()->create([
            [
                'title' => 'Web Developer',
                'author' => 'Anugerah Putra Mahanda',
                'slug' => ('Web-Developer'),
                'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos earum sed illo dolores atque, corrupti nulla porro saepe beatae. Animi laboriosam, recusandae error nesciunt adipisci sapiente. Quo deserunt eveniet praesentium!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Software Developer',
                'author' => 'Anugerah Putra Mahanda',
                'slug' => ('Software-Developer'),
                'content' => 'Dignissimos earum sed illo dolores atque, corrupti nulla porro saepe beatae. Animi laboriosam, recusandae error nesciunt adipisci sapiente. Quo deserunt eveniet praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Network Engineer',
                'author' => 'Anugerah Putra Mahanda',
                'slug' => ('Network-Engineer'),
                'content' => 'corrupti nulla porro saepe beatae. Animi laboriosam, recusandae error nesciunt adipisci sapiente. Quo deserunt eveniet praesentium!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
