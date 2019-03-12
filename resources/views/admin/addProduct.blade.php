@extends('layout')

@section('MetaTitle', 'Add')

@section('content', 'Ajouter un produit')

@section('petitforeach')
    {{--@php($add = false)--}}
    {{--@php($add = $data)--}}
    {{--@if ($add == true)--}}

    {{--@endif--}}

    <div class="produit">
        <a href="/products/edit">retour</a>
        <form action="/addprod" method="post">
            {{ csrf_field() }}
            <table>
                <thead>
                <tr>
                    <th colspan="2">Produit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" name="name" placeholder="Nom">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" placeholder="Description">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Prix</label>
                        <input type="number" class="form-control" name="price" placeholder="Prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="weigth">poid</label>
                        <input type="number" class="form-control" name="weigth" placeholder="poid">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" name="stock" placeholder="Stock">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="slug">Slug</label>
                        <input type="number" class="form-control" name="slug" placeholder="Slug">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Category">Categorie</label>
                        <select class="form-control" name="Category">
                            <option value="1">Animaux (1)</option>
                            <option value="2">dé (2)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection