@extends('AdminLayout')
@section('content')
    <h2>Ajouter un produit</h2>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <div class="presentation">
        <form action="/product" method="post">
            @csrf
            <ul> <input type="text" name="name" required><label> - Nouveau nom</label></ul>
            <ul><input type="text" name="description" required><label> - Description</label></ul>
            <ul> <input type="number" name="price" required><label> - Prix (en cts)</label></ul>
            <ul> <input type="number" name="weigth" required><label> - Poids </label></ul>
            <ul> <input type="number" name="idCategory" required><label> - Catégorie </label></ul>
            <ul> <input type="number" name="stock" required><label> - Stock </label></ul>
            <ul><input type="text" name="img"><label> - Url de l'image</label></ul>
            <button class="btn-primary" type="submit">Ajouter</button>
        </form>
    </div>

@endsection