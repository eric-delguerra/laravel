<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{

    public function index()
    {
        return view('products/products');
    }


    public function create()
    {
        return view('products/add-product');
    }


    public function store(Request $request)
    {
        //dump($request);
        return view('products/confirm-save-product');
    }


    public function show($id)
    {
        return view('products/product', [
            'x'=> $id
        ]);
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
