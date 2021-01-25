<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'MyController@home') -> name('home');

Route::get('/blog', 'MyController@blog') -> name('blog');

Route::get('/about', 'MyController@about') -> name('about');
