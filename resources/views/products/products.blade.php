@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
{{--    @php(var_dump($products))--}}
    @foreach($products as $prod)
       <a href="/product/{{ $prod->ID_product }}">{{ $prod->nom }}</a><br>
    @endforeach
@endsection