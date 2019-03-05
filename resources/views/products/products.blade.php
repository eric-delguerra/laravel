@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
    <div class="row">
        @foreach($products as $prod)
            <div class="col-4">
                <a href="product/{{ $prod->idProduct }}">
                    <img src="{{ asset("images/$prod->img") }}" alt="{{ $prod->name }}"> <br>
                </a>
                <div class="row d-flex justify-content-around Product  align-items-center">
                    <div>
                        {{ $prod->name }}
                    </div>
                    <div>
                        {{ $prod->price/100 }} € <br>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection