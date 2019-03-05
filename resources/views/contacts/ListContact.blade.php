@extends('layout')

@section('listContact')
{{--    @php(var_dump($contacts))--}}
    @foreach($contacts as $contact)
        @if ($contact['name'] == 'Eric')
            <a href="{{ $contact['link'] }}">debut(Eric)</a>
        @else
            <a href="{{ $contact['link'] }}">{{ $contact['name'] }}</a>
        @endif
    @endforeach
@endsection

