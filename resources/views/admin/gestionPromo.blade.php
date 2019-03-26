@extends('AdminPromoLayout')
@section('MetaTitle', 'Homepage Admin')
@section('content')
    <div class="container">
        <br />
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Value</th>
                <th>Type</th>
                <th>Action</th>
                <th><a href="{{action('promoController@create')}}" class="btn btn-success">Ajouter une promo</a></th>
            </tr>
            </thead>
            <tbody>
            @foreach($promos as $promo)
                <tr>
                    <td>{{$promo['id']}}</td>
                    <td>{{$promo['name']}}</td>
                    @if ($promo['type']==1)
                        <td>{{$promo['value']/100}}€</td>
                    @elseif($promo['type']==2)
                        <td>{{$promo['value']}}%</td>
                    @else
                        <td>{{$promo['value']}}</td>
                    @endif
                    <td>{{$promo['type']}}</td>
                    <td><a href="{{action('promoController@edit', $promo['id'])}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('promoController@destroy', $promo['id'])}}" method="post">
                            {{csrf_field()}}
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
