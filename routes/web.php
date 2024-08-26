<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About page', 'posts' => Post::all()]);
});

Route::get('/about/{post:slug}', function (Post $post) {
    // $post = Post::find($id);
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

Route::get('/users', function () {
    foreach(User::all() as $user)
    {
        dump($user->name);
    }
});
