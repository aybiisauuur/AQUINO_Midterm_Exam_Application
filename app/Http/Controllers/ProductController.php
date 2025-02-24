<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Gakuen Babysitters', 'author' => 'Hari Tokeino', 'genre' => 'Slice of Life'],
            ['title' => 'Haikyuu', 'author' => 'Hairuchi Furudate', 'genre' => 'Shonen'],
            ['title' => 'Yuru Camp', 'author' => 'Afro', 'genre' => 'Seinen'],
            ['title' => 'Kono Oto Tomare', 'author' => 'Amyu', 'genre' => 'Shonen'],
            ['title' => 'Attack on Titan', 'author' => 'Hajime Isayama', 'genre' => 'Shonen']
        ];

        return view('products', ['products' => $products]);
    }
}
