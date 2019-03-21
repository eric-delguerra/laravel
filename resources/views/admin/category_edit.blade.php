@extends('AdminCategoryLayout')

<div class="container">
    @section('content')
</div>
<br><br>
<div class="container">
    <ul>
        <h2 class="presentation">Editer une catégorie</h2><br  />
    </ul>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif --}}

    <ul>
        @include('errors')
    </ul>

    <div class="presentation">
        <form method="post" action="{{action('CategoryController@update', $id)}}">
                @csrf
        {{-- {{csrf_field()}} --}}
        <ul>
            <input name="_method" type="hidden" value="PATCH">
        </ul>
        <ul>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </ul>
        <ul>
            <button type="submit" class="btn btn-success" style="margin-left:38px">Mettre à jour</button>
        </ul>
        </form>
    </div>
</div>

@endsection