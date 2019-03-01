@extends('layout')

@section('listContact')
    @foreach($contacts as $contact)
        <a href="{{ $contact['link'] }}">{{ $contact['name'] }}</a>
    @endforeach
@endsection

