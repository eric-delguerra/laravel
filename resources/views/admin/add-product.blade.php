@extends('AdminLayout')

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
    <h2 class="presentation">Ajouter un produit</h2>
    <div class="presentation">
        <form action="/admin" method="post">
            @csrf
            <ul> <input type="text" name="name" required><label> - Nouveau nom</label></ul>
            <ul><input type="text" name="description"required><label> - Description</label></ul>
            <ul> <input type="number" name="price"required><label> - Prix (en cts)</label></ul>
            <ul> <input type="number" name="weigth"required><label> - Poids </label></ul>
            {{--<ul> <input type="number" name="categories_id"required><label> - Catégorie </label></ul>--}}
            <ul>
                <select required name="categories_id">
                    @dump($idCategorie);
                @foreach($idCategorie as $id)
                        <option value="{{$id['id']}}">{{$id['name']}}</option>
                    @endforeach
                </select>
                <label> - Catégorie</label>
                <select required name="promo_id">
                    <option value="0">aucun</option>
                    @foreach($idPromo as $id)
                        <option value="{{$id['id']}}">{{$id['name']}}</option>
                    @endforeach
                </select>
                <label> - Promo</label>
            </ul>
            <ul> <input type="number" name="stock"required><label> - Stock </label></ul>
            <ul><input type="text" name="img"><label> - Url de l'image</label></ul>
            <button class="btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
@endsection