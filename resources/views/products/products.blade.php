@extends('layout')
@include('products/catalogue')

@section('title', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
    @foreach($Products as $prod)
        {{ $prod['name'] }} <br>
    @endforeach
@endsection