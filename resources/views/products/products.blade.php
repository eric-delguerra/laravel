@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
{{--    @php(var_dump($products))--}}
    <button onclick="window.location.href='/products/name'">trier par nom</button>
    <button onclick="window.location.href='/products/price'">trier par prix</button>
    <br>
    @foreach($products as $prod)
       <a href="/product/{{ $prod->id }}">{{ $prod->name }}</a> {{ $prod->price }}€<br>
    @endforeach
@endsection