<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        return view('admin.add-category')
            ->with(['idCategorie' => $idCategorie]);
    }
    public function edit($id)
    {
        $category = Categories::find($id);
        return view('admin.category_edit', compact('category','id'));
    }
    public function update(Request $request, $id)
    {
        // // findOrFail: stop l'execution du script si null, contrairement à un simple "find":
        // $category = Categories::findOrFail($id);
        // // Gestion des erreurs:
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|min:5'
        // ]);

        // Gestion des erreurs (methode a partir du model 'Categories.php'):
        $this->validate($request, Categories::$rules);

        // Gestion des erreurs (autre methode):
        // $this->validate($request, [
        //     'name' => 'required|min:4'
        // ]);
        // findOrFail: stop l'execution du script si null, contrairement à un simple "find":
        $category = Categories::findOrFail($id);
        $category->name = $request->get('name');
        $category->save();
        return redirect('admin/category')
            ->with('flash_message', ' Categorie mise à jour ')
            ->with('flash_type', 'alert-warning');
        
        // Fin de l'autre methode

        // Affiche le message d'erreur:
        // dd($validator->messages());
        // Booleen: true si erreur (regle non-satisfaite):
        // dd($validator->fails());
        // Toutes les infos sous forme de tableau:
        // dd($validator);
        // // Redirection en cas de fail:
        // if($validator->fails()){

        //     return redirect(route('category.edit', $id))->withErrors($validator->errors());
        
        // } else {

        //     $category->name = $request->get('name');
        //     $category->save();
        //     return redirect('admin/category')
        //         ->with('flash_message', ' Categorie mise à jour ')
        //         ->with('flash_type', 'alert-warning');
        // }
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
