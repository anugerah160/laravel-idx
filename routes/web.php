<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    // return view('about', ['title' => 'About page', 'posts' => Post::all()]);
    $posts = Post::with(['author', 'category'])->latest()->get();
    return view('about', ['title' => 'About page', 'posts' => $posts]);
});

Route::get('/about/{post:slug}', function (Post $post) {
    // $post = Post::find($id);
    return view('post', ['title' => 'Post Page', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    $posts = $user->posts->load('category', 'author');
    return view('about', ['title' => count($posts) . ' Posts by ' . $user->name, 'posts' => $posts]);
});

Route::get('/categories/{category:name}', function (Category $category) {
    $posts = $category->posts->load('category', 'author');
    return view('about', ['title' => count($posts) . ' found with category : ' . $category->name, 'posts' => $posts]);
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
