@extends('layout')

@section('title', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
    @foreach($products as $prod)
        {{ $prod['name'] }}  {{ $prod['description'] }}<br>
    @endforeach
@endsection