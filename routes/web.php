<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// route name = /gohere
Route::get('/gohere', function () {
    return view('test');
});

Route::get('/readit', function () {
    return view('blog');
});

Route::get('/users', [UserController::class, 'showUsers']);
Route::get('/mydata', [UserController::class, 'mydata']);
Route::get('/userID/{id}', [UserController::class, 'showID'])->whereNumber('id');
Route::get('/studentsssss', [UserController::class, 'studentInfo'])->name('students');

Route::fallback(function () {
    return view('error');
});
