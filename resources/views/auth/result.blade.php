@extends('newLayout')

@section ('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Form results</h2>
        </div>
        <div class="panel-body">
    </div>
    <p>Prénom : <b>{{ $user['firstname'] }}</b></p>
    <p>Nom : <b>{{ $user['lastname'] }}</b></p>
    <p>What's on your mind? : <b>{{$user ['content']}}</b></p>
    </div>

@endsection
