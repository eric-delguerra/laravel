<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Categories;
use App\Promo;

class promoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promos = Promo::all()->toArray();
        return view('admin.gestionPromo', compact('promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addPromo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $promo = $this->validate(request(), [
            'name' => 'required',
            'description' => 'nullable',
            'value' => 'required',
            'type' => 'required|numeric',
            'promo_start' => 'nullable|date',
            'promo_end' => 'nullable|date',
        ]);
        Promo::create($promo);

        return redirect('/admin/promo')
            ->with('flash_message', ' Niquel, c\'est bien ajouté ')
            ->with('flash_type', 'alert-success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo = Promo::find($id);
        return view('admin.editPromo')
            ->with(['promo' => $promo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $promo = Promo::find($id);

        $promo->name = $request->get('name');
        $promo->value = $request->get('value');
        $promo->type = $request->get('type');
        $promo->description = $request->get('description');
        $promo->save();
        return redirect('/admin/promo')
            ->with('flash_message', ' Produit mis à jour ')
            ->with('flash_type', 'alert-warning');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::find($id);
        $promo->delete();
        return redirect('/admin/promo')
            ->with('flash_message', 'Produit supprimé')
            ->with('flash_type', 'alert-danger');
    }


}
