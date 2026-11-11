<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('books.index', [
            'title' => '本棚',
            'owner' => '山田',
            'books' => $books,
        ]);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return view('books.show', ['book' => $book]);
    }
}