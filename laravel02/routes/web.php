<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagamenti', 'MyController@getPagamenti') -> name('pagamenti');
Route::get('/pending', 'MyController@getPending') -> name('pending');