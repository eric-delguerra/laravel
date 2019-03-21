@extends('AdminLayout')
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
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
{{--            @dd($promos);--}}
            @foreach($promos as $promo)
                <tr>
                    <td>{{$promo['id']}}</td>
                    <td>{{$promo['name']}}</td>
                    <td>{{$promo['value']/100}}€</td>
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
