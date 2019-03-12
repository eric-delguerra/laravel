@extends('layout')

@section('MetaTitle', "Fiche $product->name ")

@section('content', "Fiche produit : $product->name")

@section('apropos')
    <br>
    <table>
        <tr>
            <td>
            Prix: {{$product->price}}€
            </td>
            <td>
                Stock: {{$product->stock}}
            </td>
            <td>
                Poids: {{$product->weigth}}
            </td>
            @if ($promo->Type==!null)
                <td>
                    Category: {{$promo->Type}}
                </td>
            @endif
        </tr>
    </table>
    <br>
{{--    @php(var_dump($product))--}}
    description: {{$product->description}}
@stop