@extends('AdminLayout')
@section('MetaTitle', 'Homepage Admin')
@section('content')
    <div class="container">





        @if(isset($modif))
            {{--@include('errors')--}}
            <form action='{{url('/admin/categories/update/' . $modif->id)}}' method='post'>
                {{ csrf_field() }}

                <input type='text' value="{{$modif->name}}" name="categorieName">
                @else
                    <form action='{{url('/admin/categories/new')}}' method='post'>
                        {{ csrf_field() }}
                        <input type='text' placeholder="nom de la catégorie" name="categorieName">

                  @endif

                  <input type='submit' value='enregistrer'>
                    </form>
    </div>
@endsection
