@extends('layout')

@section('connect')
    <form action="" method="get" class="connect">
        <div>
            <label for="user">User: </label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="mail">Email: </label>
            <input type="email" name="mail" id="email">
        </div>
        @yield('inscript')
        <div>
        <input type="submit" value="@yield('content', 'connect')">
        </div>
    </form>
    <a href="@yield('link-connect')">@yield('link-connect')</a>
@stop
