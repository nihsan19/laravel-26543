<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => '吾輩は猫である', 'author' => '夏目漱石', 'price' => 660,  'stock' => 3]);
        Book::create(['title' => '走れメロス',     'author' => '太宰治',   'price' => 440,  'stock' => 5]);
        Book::create(['title' => '銀河鉄道の夜',   'author' => '宮沢賢治', 'price' => 1100]);
    }
}