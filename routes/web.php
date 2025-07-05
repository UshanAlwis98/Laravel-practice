<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gohere', function () {
    return view('test');
});

Route::get('/readit', function () {
    return view('blog');
});

