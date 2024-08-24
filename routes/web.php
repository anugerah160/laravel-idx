<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About page']);
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
