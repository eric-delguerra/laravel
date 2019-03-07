@extends('layout')

@section('MetaTitle', "Edition $product->name ")

@section('content', "Edition Produit: $product->name")

@section('apropos')
    <div class="produit">
        <a href="/products/edit">retour</a>
        <form action="/product/edit/{{$product->id}}" method="post">
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
                        <label for="name">Nom</label><br>
                        <input type="text" class="form-control" name="name" value="{{$product->name}}">
                    </td>
                </tr>
                <tr>
                    <td >
                        <label for="description">Description</label><br>
                        <textarea cols = "200" rows = "20" class="form-control" name="description" value="{{$product->description}}">
                        {{$product->description}}
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Prix</label><br>
                        <input type="number" class="form-control" name="price" value="{{$product->price}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="weigth">poid</label><br>
                        <input type="number" class="form-control" name="weigth" value="{{$product->weigth}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="stock">Stock</label><br>
                        <input type="number" class="form-control" name="stock" value="{{$product->stock}}">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Category">Categorie</label><br>
                        <select class="form-control" name="Category">
                            <option value="{{$product->ID_category}}">Actuel ({{$product->ID_category}})</option>
                            <option value="1">Animaux (1)</option>
                            <option value="2">dé (2)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@stop