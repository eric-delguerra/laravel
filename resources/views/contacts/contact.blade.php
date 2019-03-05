@extends('layout')

@section('SubMenu')
    @foreach($contacts as $contact)
        <a href="{{ $contact['link'] }}">{{ $contact['name'] }}</a>
    @endforeach
@endsection
@section('contact')
    <h1>A Propos de {{ $id }}</h1>
    <div class="contract">
        <div class="photo">
            <img src="{{ $id }}" alt="photo de {{ $id }}">
        </div>
        <div class="biographie">
            <h3>{{ $id }}</h3><br>
            <p>toto</p>
        </div>
    </div>
@stop


