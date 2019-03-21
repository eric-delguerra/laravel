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
    <form method="post" action="{{action('AdminController@update', $product->id)}}">
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
        @foreach($promo as $id)
            {{var_dump($id->id)}}
            {{dd($product->Promo->name)}}
            @if ($id -> id == $product -> promo_id)
                <option value="{{$id['id']}}" selected>{{$id['name']}}</option>
            @else
                <option value="{{$id['id']}}">{{$id['name']}}</option>
            @endif
        @endforeach
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Promo: </label>
                <select required name="promo_id">
                    <option value="0">aucun</option>
                @foreach($promo as $id)
                    {{var_dump($id->id)}}
                    {{var_dump($product -> promo_id)}}
                    @if ($id -> id == $product -> promo_id)
                        <option value="{{$id['id']}}" selected>{{$id['name']}}</option>
                    @else
                        <option value="{{$id['id']}}">{{$id['name']}}</option>
                    @endif
                @endforeach
                </select>
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