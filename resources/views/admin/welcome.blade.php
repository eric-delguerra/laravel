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
            <th>Price</th>
            <th>Stock</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Products as $product)
            <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td>{{$product['price']/100}}€</td>
                <td>{{$product['stock']}}</td>
                <td><a href="{{action('productController@edit', $product['id'])}}" class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('productController@destroy', $product['id'])}}" method="post">
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
