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
    <h2 class="presentation">Ajouter une promo</h2>
    <div class="presentation">
        <form action="/admin/promo" method="post">
            @csrf
            <ul> <input type="text" name="name" required><label> - Nouveau nom</label></ul>
            <ul><input type="text" name="description"><label> - Description</label></ul>
            <ul> <input type="number" name="value"required><label> - Valeur de la reduction</label></ul>
            <ul><select required name="type">
                    <option value="1">reduction fixe</option>
                    <option value="2">reduction en pourcentage</option>
                </select>
                <label> - Type de reduction</label></ul>
            <ul> <input type="date" name="promo_start"><label> - Date de debut </label></ul>
            <ul><input type="date" name="promo_end"><label> - Date de fin</label></ul>
            <button class="btn-primary" type="submit">Ajouter</button>
        </form>
    </div>
@endsection