<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Promo;

class AdminController extends Controller
{
    public function index()
    {
        $Products = Product::all()->toArray();
        return view('admin.welcome', compact('Products'));
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
            'categories_id' => 'required|numeric',
            'promo_id' => 'required|numeric',
        ]);
        Product::create($product);

        return redirect('/admin')
            ->with('flash_message', ' Niquel, c\'est bien ajouté ')
            ->with('flash_type', 'alert-success');
    }
    public function create()
    {
        $idCategorie = Categories::all()->toArray();
        $idPromo = Promo::all()->toArray();
        return view('admin.add-product')
            ->with(['idCategorie' => $idCategorie])
            ->with(['idPromo'=>$idPromo]);
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product','id'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        $product->weight = $request->get('weight');
        $product->description = $request->get('description');
        $product->save();
        return redirect('admin')
            ->with('flash_message', ' Produit mis à jour ')
            ->with('flash_type', 'alert-warning');
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin')
            ->with('flash_message', 'Produit supprimé')
            ->with('flash_type', 'alert-danger');

    }

    public function categories()
    {
        $categories = Categories::all();
        return view ('/admin/categories', ['types'=>$categories]);

    }

    public function categoriesNew()
    {
        return view ('/admin/categoriesNew');

    }

    public function categoriesNewStore(Request $request)
    {

        $newObject = new Categories;
        $newObject-> name = $request->input('categorieName');
        $newObject->save();
        return redirect('/admin/categories');
    }

    public function categoriesDelete($id)
    {
    $cat = Categories::find($id);
    $cat->delete();

    return redirect('/admin/categories');

    }

    public function categoriesUpdateForm($id)
    {
        $cat = Categories::find($id);
        return view('/admin/categoriesNew', ['modif' => $cat]);
    }

    public function categoriesUpdate($id, Request $request)
    {
//        $this->validate($request, Categories::$rules);
        $cat = Categories::find($id);
        $cat-> name = $request->input('categorieName');
        $cat->save();
        return redirect ('/admin/categories');

    }

}
