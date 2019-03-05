@extends('layout')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('petitforeach')
    <div class="row tri">
        <div>
            <a href="/products?price" class="btn btn-outline-info">
                Trier par prix
            </a>
        </div>
        <div>
            <a href="/products" class="btn btn-outline-info">
                Trier par nom
            </a>
        </div>
    </div>
       <div class="row">
        @foreach($products as $prod)
            <div class="col-4">
                <a href="product/{{ $prod->id }}">
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