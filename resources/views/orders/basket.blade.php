@extends('newLayout')
@section('title')
    <h2 class="presentation">Votre panier</h2><br><br>
@endsection
@section('bottom')
    @if(session('panier'))

        @php($i = 0)
        @foreach($data as $product)
            <div class="presentation">
                {{ $product['name'] }} : {{ $qtes[$i] }} <br>
                <img src="{{asset("images/$product[img]")}}" alt="{{$product['name']}}" class="img-fluid img-thumbnail"
                     style="width: 200px; height: 200px;">
                <form action="{{ action('BasketController@destroy') }}" method="post">
                    {{csrf_field()}}
                    <input name="id" type="hidden" value="{{$product['id']}}">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>


            @php($i++)
        @endforeach

        <h2>Total : {{ $total }}€</h2>
        <form action="{{ action('BasketController@store') }}" method="post">
            {{csrf_field()}}
            <button type="btn">Valider la commande</button>
        </form></div>
    @else
        <h2>Votre panier est vide</h2>
    @endif



@endsection