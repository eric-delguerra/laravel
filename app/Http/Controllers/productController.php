<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{

    public function index()
    {
    $products = Product::all();
        return view('products.products', ['products' => $products]);

    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        return view('admin.confirm-save-product');
    }


    public function show($id)
    {
        $results = Product::find($id);
        return view('products/product', ['product' => $results]);
    }


    public function edit()
    {
        //
    }


    public function update(Request $_post, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
