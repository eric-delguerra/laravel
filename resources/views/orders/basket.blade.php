@extends('newLayout')

@section('listProd')

    @if(session('panier'))
            {{--@dd($data)--}}
{{--            @dd($qtes)--}}

            @php($i = 0)
    @foreach($data as $product)

            {{ $product['name'] }} : {{ $qtes[$i] }} <br>
            @php($i++)
    @endforeach
@endif


@endsection