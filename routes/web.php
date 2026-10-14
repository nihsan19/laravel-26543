<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
     return view('welcome');
});

Route::get('/top', function () {
    return view('top');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/books', [BookController::class, 'index']);

Route::get('/books/{id}', function ($id) {
    return view('books.show', ['id' => $id]);
});