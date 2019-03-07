@extends('layout')

@section('MetaTitle', "Fiche $product->name ")

@section('content', "Fiche produit : $product->name")

@section('apropos')
    <br>
{{--    @php(var_dump($product))--}}
    description: {{$product->description}}
@stop