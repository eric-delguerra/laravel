<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Promo;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{

    public function index()
    {
        if (isset($_GET['price'])) {
//            $products   = Product::all()->sortBy('price');
            $products = DB::select('SELECT * FROM products ORDER BY price');
            return view('products.products', ['products' => $products]);
        }
        if (isset($_GET['stock'])) {
            $products = Product::all()->sortBy('stock');
            return view('products.products', ['products' => $products]);
        } else {
            $products = Product::all()->sortBy('name');
            return view('products.products', ['products' => $products]);
        }
    }

    public function show($id)
    {
        $results = Product::find($id);
        return view('products/product', ['product' => $results]);
    }
}
