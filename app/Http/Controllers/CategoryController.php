<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Promo;

class CategoryController extends Controller
{
    public function index()
    {
        $Category = Categories::all()->toArray();
        return view('admin.category', compact('Category'));
    }

    public function store(Request $request)
    {
        $category = $this->validate(request(), [
            'name' => 'required',
        ]);
        Categories::create($category);

        return redirect('/admin/category')
            ->with('flash_message', ' Niquel, c\'est bien ajouté ')
            ->with('flash_type', 'alert-success');
    }
    public function create()
    {
        $idCategorie = Categories::all()->toArray();
        // $idPromo = Promo::all()->toArray();
        return view('admin.add-category')
            ->with(['idCategorie' => $idCategorie]);
            // ->with(['idPromo'=>$idPromo]);
    }
    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin.category_edit', compact('category','id'));
    }
    public function update(Request $request, $id)
    {
        $category = Categories::find($id);

        $category->name = $request->get('name');
        $category->save();
        return redirect('admin/category')
            ->with('flash_message', ' Categorie mise à jour ')
            ->with('flash_type', 'alert-warning');
    }
    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect('admin/category')
            ->with('flash_message', 'Categorie supprimée')
            ->with('flash_type', 'alert-danger');

    }
}
