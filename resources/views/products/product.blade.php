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
                    <button type="submit">Acheter</button>
                </div>

            </div>

        </div>
    </div>
@endsection