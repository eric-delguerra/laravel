@extends('layout')

@section('MetaTitle', "Fiche $product->nom ")

@section('content', "Fiche produit : $product->nom")

@section('apropos')
    <br>
{{--    @php(var_dump($product))--}}
    description: {{$product->description}}
@stop