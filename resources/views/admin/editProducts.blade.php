@extends('layout')

@section('MetaTitle', 'Edition')

@section('content', 'Edition des Produits')

@section('petitforeach')
    <div class="produit">
        <table>
        <thead>
            <tr>
                <th colspan="2">Table Produits <br><a href="/addprod">Ajouter</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $prod)
                <tr>
                <td>
                        <a href="/product/{{ $prod->id }}">{{ $prod->name }}</a><br>
                </td>
                    <td>
                        <a href="/product/edit/{{ $prod->id }}">Editer</a><br> Supprimer
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection