@extends('layout')

@section('MetaTitle', "Fiche $products->title")

@section('content', "Fiche produit : $products->title")

@section('one_product')

    <h1>Détail de l'article</h1><br>
    <p>Article: {{ $products->title }}</p>
    <img class="card-img-top" src="{{ asset('images/' . $products->image)}}" alt="Card image cap">
    <p>Prix: {{ $products->price }} €</p>
    <p>Description: {{ $products->content }}</p>
        <br>

@endsection
