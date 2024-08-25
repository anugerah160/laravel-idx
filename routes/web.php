<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['name' => 'Anugerah Putra Mahanda', 'title' => 'About page', 'posts' => [
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
    ]]);
});

Route::get('/about/{id}', function ($id) {
    // dd($id);
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($id) {
        return $post['id'] == $id;
    });
    return view('post', ['title' => 'Post Page', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
Route::get('/skill', function () {
    return view('skill', ['title' => 'Skill Page']);
});
Route::get('/experience', function () {
    return view('experience', ['title' => 'Experience Page']);
});
