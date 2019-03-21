<?php

namespace App\Http\Controllers;

use App\Product;


class productController extends Controller
{
    public function index()
    {
        if (isset($_GET['price'])) {
            $products = Product::all()->sortBy('price');
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
