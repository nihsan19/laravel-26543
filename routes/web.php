<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

// （最初からある / のルートは、そのまま残す）

Route::get('/top', [PageController::class, 'top'])->name('top');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');