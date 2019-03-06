<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{

    public function index()
    {
        if(isset($_GET['price'])){
            $products = Product::all()->sortBy('price');
            return view('products.products', ['products' => $products]);
        }
        else{
            $products = Product::all()->sortBy('name');
            return view('products.products', ['products' => $products]);
        }
    }

    public function create()
    {
        return view('admin.add-product');
    }

    public function store(Request $request)
    {
        $product = $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'img' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|numeric',
            'weigth' => 'required|numeric',
            'idCategory' => 'required|numeric',
        ]);

        Product::create($product);
        return view('admin.confirm-save-product');
//        return view('admin.confirm-save-product');
    }


    public function show($id)
    {
        $results = Product::find($id);
        return view('products/product', ['product' => $results]);
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit',compact('product','id'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->weigth = $request->get('weigth');
        $product->description = $request->get('description');
        $product->save();
        return redirect('admin');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin')->with('success','Product has been  deleted');
    }
}
