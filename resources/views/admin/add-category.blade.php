@extends('AdminCategoryLayout')

<div class="container">
        @section('content')  
</div>
{{-- <br><br> --}}
<div class="container">
    <ul>
        <h2 class="presentation">Ajouter une catégorie</h2>
    </ul>
    <br>
    <ul>
        @include('errors')
    </ul>
        {{-- @if ($errors->any())
            <div class="container">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif --}}

    <div class="presentation">
        <form method="post" action="/admin" >
            @csrf
                <ul>
                    <input type="text" class="form-control" name="name" placeholder="Nouvelle catégorie">
                </ul>
                <ul>
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Ajouter</button>
                </ul>
        </form>
    </div>
</div>

@endsection