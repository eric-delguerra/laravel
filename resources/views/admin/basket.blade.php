@extends('AdminLayout')
@section('content')

    @foreach($orders as $order)

        <div class="container">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">N°Commande</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Id de l'article</th>
                    <th scope="col">Quantité</th>
                </tr>
                </thead>
                @foreach($order->product as $prod)

                    <tbody>
                    <tr>
                        <th scope="row">{{ $prod->pivot->order_id }}</th>
                        <td>{{ $order->User->firstName }}</td>
                        <td><a href="/product/{{ $prod->pivot->product_id }}">
                                {{ $prod->pivot->product_id }}
                            </a></td>
                        <td>{{ $prod->pivot->quantity }}</td>
                    </tr>
                    </tbody>


                @endforeach
                <form action="{{ action('BasketController@deleteOrder') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $order->id }}" name="id">
                    <button type="submit">delete</button>
                </form>

                @endforeach
            </table>
        </div>
@endsection