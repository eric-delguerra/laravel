@extends('AdminLayout')

@section('content')
<div class="container">
    <h2 class="presentation">Editer un produit</h2><br  />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <form method="post" action="{{action('AdminController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Prix:</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
       </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Poids:</label>
                <input type="text" class="form-control" name="weigth" value="{{$product->weigth}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Stock:</label>
                <input type="text" class="form-control" name="stock" value="{{$product->stock}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="price">Description:</label>
                <textarea class="form-control" name="description">{{$product->description}}</textarea>
            </div>
        </div>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Mettre à jour</button>
        </div>
    </div>
    </form>


@endsection