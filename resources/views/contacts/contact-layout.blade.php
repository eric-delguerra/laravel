@extends('/contacts/ListContact')
@section('contact')
    <h1>A Propos de @yield('nom', 'Anonyme')</h1>
    <div class="contract">
        <div class="photo">
            <img src="@yield('photo')" alt="photo de @yield('nom', 'Anonyme')">
        </div>
        <div class="biographie">
            <h3>@yield('nom', 'Anonyme')</h3><br>
            <p>@yield('cv','cv non disponible')</p>
        </div>
    </div>
@stop
