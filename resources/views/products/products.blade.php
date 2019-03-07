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
        <div>
            <a href="/products?stock" class="btn btn-outline-info">
                Trier par quantité
            </a>
        </div>
    </div>
       <div class="row">
        @foreach($products as $prod)
            <div class="col-4 border border-dark rounded">
                <a href="product/{{ $prod->id }}">
                    <img src="{{ asset("images/$prod->img") }}" alt="{{ $prod->name }}"> <br>
                </a>
                <div class="row d-flex justify-content-around Product  align-items-center border border-dark ">
                    <div>
                        {{ $prod->name }}
                    </div>
                    <div>
                        {{ $prod->price/100 }} € <br>
                    </div>
                    <div style="margin-top: 1rem;">
                        @if($prod->stock > 0 )
                            <p style="color: #2d995b">Disponible</p>
                        @else
                            <p style="color: red">Rupture de stock</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection