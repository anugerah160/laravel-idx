<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return 
        [
            [
               'id' => 1,
               'title' => 'Web Developer',
               'author' => 'Anugerah Putra Mahanda',
               'content' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos earum sed illo dolores atque, corrupti nulla porro saepe beatae. Animi laboriosam, recusandae error nesciunt adipisci sapiente. Quo deserunt eveniet praesentium!'
            ],
            [
               'id' => 2,
               'title' => 'Software Developer',
               'author' => 'Anugerah Putra Mahanda',
               'content' => 'Dignissimos earum sed illo dolores atque, corrupti nulla porro saepe beatae. Animi laboriosam, recusandae error nesciunt adipisci sapiente. Quo deserunt eveniet praesentium. Lorem ipsum, dolor sit amet consectetur adipisicing elit!'
            ]   
        ];
    }

    public static function find($id): array
    {
        // return Arr::first(static::all(), function($post) use ($id) {
        //     return $post['id'] == $id;
        // });

        $post = Arr::first(static::all(), fn($post) => $post['id'] == $id);

        if(! $post)
        {
            abort(404);
        }
        return $post;
    
    }

}