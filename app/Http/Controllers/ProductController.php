<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Gakuen Babysitters', 'author' => 'Hari Tokeino', 'price' => 20.99],
            ['title' => 'Haikyuu', 'author' => 'Hairuchi Furudate', 'price' => 16.99],
            ['title' => 'Yuru Camp', 'author' => 'Afro', 'price' => 15.99],
            ['title' => 'Kono Oto Tomare', 'author' => 'Amyu', 'price' => 17.99],
            ['title' => 'Attack on Titan', 'author' => 'Hajime Isayama', 'price' => 10.00]
        ];

        return view('products', ['products' => $products]);
    }
}
