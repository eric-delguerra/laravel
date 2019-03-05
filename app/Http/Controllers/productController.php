<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{

    public function index()
    {
        $products = DB::select('SELECT * FROM products');

//        dd($products);
        return view('products.products', ['products' => $products]);

    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        //dump($request);
        return view('admin.confirm-save-product');
    }


    public function show($id)
    {
        $results = DB::select('select * from products where idProduct = :id', ['id' => $id]);
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
