@extends('AdminCategoryLayout')

@section('content')
<div class="container">
    <h2 class="presentation">Editer une catégorie</h2><br  />
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
    <form method="post" action="{{action('CategoryController@update', $id)}}">
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nom:</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}">
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