@extends('layout')

@section('connect')
    <form action="" method="post" class="connect">
        <div>
            <label for="user">Utilisateur: </label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="password">Mot de Passe: </label>
            <input type="password" name="password" id="password">
        </div>
        @yield('inscript')
        <div>
        <input type="submit" value="@yield('content', 'connect')">
        </div>
    </form>
    <a href="@yield('link-connect')">@yield('link-connect')</a>
@stop
