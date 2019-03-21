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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $promo, $id)
    {
//        $promo = Promo::find($id);

        $promo = $this->validate(\request(),[
            'name'=>'required',
            'price'=>'required|numeric',
            'type'=>'required|numeric',
            'description'=>'->nullable'
        ]);

//        $promo->name = $request->get('name');
//        $promo->value = $request->get('price');
//        $promo->type = $request->get('type');
//        $promo->description = $request->get('description');
        $promo->save();
        return redirect('/promo')
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
        //
    }
}
