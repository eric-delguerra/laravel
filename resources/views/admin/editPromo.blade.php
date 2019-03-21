@extends('AdminLayout')

@section('content')
    {{--@dd($promo);--}}
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
        {{--@dump($product)--}}
        {{--    @dd($product->id);--}}
        <form method="post" action="{{action('promoController@update', $promo->id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Nom:</label>
                    <input type="text" class="form-control" name="name" value="{{$promo->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Valeur:</label>
                    <input type="text" class="form-control" name="value" value="{{$promo->value}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Type:</label>
                    <input type="text" class="form-control" name="type" value="{{$promo->type}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Description:</label>
                    <textarea class="form-control" name="description">{{$promo->description}}</textarea>
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