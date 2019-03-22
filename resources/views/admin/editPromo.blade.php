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
                    <label for="value">Valeur (en cts ou en %):</label>
                    <input type="text" class="form-control" name="value" value="{{$promo->value}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="type">Type:</label>
                    <select required name="type">
                        @switch($promo->type)
                            @case(1)
                                <option value="1" selected>reduction fixe</option>
                                <option value="2">reduction en pourcentage</option>
                            @break
                            @case(2)
                                <option value="1">reduction fixe</option>
                                <option value="2" selected>reduction en pourcentage</option>
                            @break
                        @endswitch
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description">{{$promo->description}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="description">Date de debut:</label>
                    <input type="date" class="form-control" name="promo_start" value="{{$promo->promo_start}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="description">Date de fin:</label>
                    <input type="date" class="form-control" name="promo_end" value="{{$promo->promo_end}}">
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