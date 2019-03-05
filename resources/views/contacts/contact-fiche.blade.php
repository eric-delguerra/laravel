@extends('contacts/ListContact')
@section('content')
    <h1>A Propos de @yield('nom', 'Inconnue')</h1>
    <div class="contract">
        <div class="photo">
            <img src="@yield('photo')" alt="photo de @yield('nom', 'Inconnue')">
        </div>
        <div class="biographie">
            <h3>@yield('nom', 'Inconnue')</h3><br>
            <p>@yield('cv','cv non disponible')</p>
        </div>
    </div>
@stop
