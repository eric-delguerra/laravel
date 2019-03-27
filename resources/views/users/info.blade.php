@extends('newLayout')

@section('title')
    Name : {{ $infos->firstName }} <br>
    LastName : {{ $infos->lastName }} <br>
    Email : {{ $infos->email }} <br>
    {{--@dd($infos->orders)--}}
    <br><br><br>
    @if($infos->orders)
        @foreach($infos->orders as $order)
            Pour la commande n°{{ $order->id }} <br><br>
            @foreach($order->product as $prod)
                Nom du produit : {{ $prod->name }} <br>
            @endforeach
            <br>
        @endforeach
    @else Vous n'avez pas encore passé de commande !
    @endif
@endsection