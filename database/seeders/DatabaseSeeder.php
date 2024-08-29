<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $anu = User::create([
            'name' => 'Anugerah Putra Mahanda',
            'username' => 'anuu',
            'email' => 'artuphareguna1@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);

        $asli = Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer',
        ]);
        $asli2 = Category::create([
            'name' => 'Networking',
            'slug' => 'Networking',
        ]);

        Post::factory(100)->recycle([
            $asli, $asli2,
            Category::factory(1)->create(),
            $anu,
            User::factory(4)->create()
        ])->create();
    }
    
}
