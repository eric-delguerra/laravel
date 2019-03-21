@extends('AdminCategoryLayout')

@section('content')
    @if ($errors->any())

<div class="container">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach
</div>



    @endif
    <h2 class="presentation">Ajouter une catégorie</h2>
    <div class="presentation">
        <form action="/admin" method="post">
            @csrf
            <ul> <input type="text" name="name" required placeholder="Nouvelle catégorie"></ul>
            <ul>
                {{-- <select required name="categories_id">
                    @dump($idCategorie);
                    @foreach($idCategorie as $id)
                        <option value="{{$id['id']}}">{{$id['name']}}</option>
                    @endforeach
                </select> --}}
                {{-- <label> - Catégorie</label>
                <select required name="promo_id">
                    <option value="0">aucun</option>
                    @foreach($idPromo as $id)
                        <option value="{{$id['id']}}">{{$id['name']}}</option>
                    @endforeach
                </select> --}}
                {{-- <label> - Promo</label> --}}
            </ul>
            <button class="btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
@endsection