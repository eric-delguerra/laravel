@extends('/contacts/ListContact')
@section('apropos')
    <div class="contfract">
        <div class="photfro" style="align-content: right" >
            <img src="@yield('photo')" alt="photo de contact">
        </div>
        <div class="biogfrraphie" style="align-content: left;">
            <h3>@yield('nom')</h3><br>
            <p>@yield('cv','cv non disponible')</p>
        </div>
    </div>
@stop
