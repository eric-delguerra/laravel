@extends('layout')

@section('MetaTitle', "$product->name")

@section('contact')
    <div class="row">
        <div class="col-4">
            <img src="{{ asset("images/$product->img") }}" alt="{{ $product->name }}">
        </div>
        <div class="col-6">
            <div class="margin-top: auto title">
                {{ $product->name }}
            </div>
            <p class="description">{{ $product->description }}</p>
            <div class="row">
                <div class="col prix">
                    {{ $product->price/100 }} €
                </div>
                <div class="col p-2" >
                    <form action="{{ action('BasketController@addProduct')}}" method="post">
                        @csrf
                        @if($product->stock > 0)
                        <p> Vite ! Il en reste {{ $product->stock }} en stock ! </p>

                        <input type="number" min="0" max="{{ $product->stock }}" name="qte">
                        <input type="hidden" value="{{$product->id}}" required name="id">
                        <button type="submit">Acheter</button>
                        @else
                            <p>Désolé nous n'avons plus de cet article. </p>
                        @endif
                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection