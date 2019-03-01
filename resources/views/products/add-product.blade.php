@extends('layout')

@section('MetaTitle', 'Add Product')

@section('content')
<form action="/product" method="post">
    @csrf
        <ul> <input type="text"><label>Nouveau nom</label></ul>
        <ul><input type="text"><label>Description</label></ul>
        <ul> <input type="number"><label>Price</label></ul>
        <ul><input type="text"><label>Url de l'image</label></ul>
        <button class="btn-primary" type="submit">Ajouter</button>
</form>
@endsection