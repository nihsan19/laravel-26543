<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => '吾輩は猫である', 'author' => '夏目漱石', 'price' => 660],
            ['title' => '走れメロス',     'author' => '太宰治',   'price' => 440],
            ['title' => '銀河鉄道の夜',   'author' => '宮沢賢治', 'price' => 1100],
        ];

        return view('books.index', [
            'title' => '本棚',
            'owner' => '山田',
            'books' => $books,
        ]);
    }
}