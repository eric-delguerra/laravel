@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('content')
    @foreach($products as $prod)
        {{ $prod['name'] }}  {{ $prod['description'] }}<br>
    @endforeach
@endsection