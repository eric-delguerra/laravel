@extends('AdminLayout')


@section('content')
    <h2 class="presentation">Ajouter un produit</h2>
    <div class="presentation">
        <form action="/product" method="post">
            @csrf
            <ul> <input type="text" name="name" required><label> - Nouveau nom</label></ul>
            <ul><input type="text" name="description" required><label> - Description</label></ul>
            <ul> <input type="number" name="price" required><label> - Prix (en cts)</label></ul>
            <ul> <input type="number" name="weigth" required><label> - Poids </label></ul>
            <ul> <input type="number" name="categories_id" required><label> - Catégorie </label></ul>
            {{--<ul>--}}
                {{--<select required name="categorie_id">--}}
                {{--@foreach($idCategorie as $id)--}}
                        {{--<option value="{{$id['id']}}">{{$id['name']}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
                {{--<label> - Catégorie</label>--}}
            {{--</ul>--}}
            <ul> <input type="number" name="stock" required><label> - Stock </label></ul>
            <ul><input type="text" name="img"><label> - Url de l'image</label></ul>
            <button class="btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
@endsection
