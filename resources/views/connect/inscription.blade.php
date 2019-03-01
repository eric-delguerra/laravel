@extends('connect/connect-layout')
@section('content')
    inscription
@stop

@section('inscript')
    <div>
        <label for="firstname">Prenom: </label>
        <input type="text" name="firstname" id="prenom">
    </div>
    <div>
        <label for="lastname">Nom: </label>
        <input type="text" name="lastname" id="nom">
    </div>
    {{--<div>
        {{--<label for="user">User: </label>
        <input type="text" name="user" id="user">
    </div>
    <div>
        <label for="user">User: </label>
        <input type="text" name="user" id="user">
    </div>
    <div>
        <label for="user">User: </label>
        <input type="text" name="user" id="user">
    </div>    --}}
@stop

@section('link-connect')
    connexion
@stop