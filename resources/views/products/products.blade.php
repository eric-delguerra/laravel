@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
{{--    @php(var_dump($products))--}}
    @foreach($products as $prod)
       <a href="/product/{{ $prod->id }}">{{ $prod->name }}</a> {{ $prod->price }}€<br>
    @endforeach
@endsection