@extends('layout')

@section('MetaTitle', "Fiche $product->name ")

@section('content', "Fiche produit : $product->name")

@section('apropos')
    {{--@dump($product)--}}
    {{--@dump($promo)--}}
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
            @if ($product->promo_id == !null)
                <td>
                    promo: Réduction de {{$promo->Valeur}}
                    @switch($promo->id)
                        @case(1)
                            %
                        @break
                        @case(2)
                        €
                        @break
                    @endswitch

                </td>
            @endif
        </tr>
    </table>
    <br>
{{--    @php(var_dump($product))--}}
    description: {{$product->description}}
@stop