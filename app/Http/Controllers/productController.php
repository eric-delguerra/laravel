<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{

    public function index()
    {
        $tab = [
            [
                'name' => 'saucisson',
                'price' => 12,
                'description' => 'Il est bon'
            ],
            [
                'name' => 'Fromage',
                'price' => 9,
                'description' => 'C\'est pas mauvais'
            ],
            [
                'name' => 'pain',
                'price' => 1,
                'description' => 'Le corps du Christ'
            ],
            [
                'name' => 'Pinard',
                'price' => 56,
                'description' => 'Le sang du Christ'
            ]
        ];

        return view('products/products', [
            'Products' => $tab
        ]);
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
