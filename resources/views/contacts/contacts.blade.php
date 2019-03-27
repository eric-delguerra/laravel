@extends('layout_view_contacts')

{{-- @section('SubMenu') --}}
    {{-- @foreach($contacts as $contact) --}}
        {{-- <a href="{{ $contact['link'] }}">{{ $contact['name'] }}</a> --}}
    {{-- @endforeach --}}
{{-- @endsection --}}
{{-- @section('contact')  --}}
    {{-- <h1>A Propos de {{ $id }}</h1>  --}}
    {{-- <div class="contract">  --}}
        {{-- <div class="photo">  --}}
            {{-- <img src="{{ $id }}" alt="photo de {{ $id }}">  --}}
        {{-- </div>  --}}
        {{-- <div class="biographie">  --}}
            {{-- <h3>{{ $id }}</h3><br>  --}}
            {{-- <p>toto</p>  --}}
        {{-- </div>  --}}
    {{-- </div>  --}}
{{-- @stop  --}}

@section('contact')
    @foreach($lastName as $contact)
        
        <div class="col-md-3">
            <div class="card mb-4 box-shadow">
                <a href="contact/{{ $contact->firstName }}" class="btn btn-sm btn-outline-secondary">
                {{-- <img class="card-img-top" data-src="holder.js/100px25?theme=thumb&bg=55595c&fg=eceeef&text={{ $contact['link'] }}" alt="Card image cap"> --}}
                <img class="card-img-top" data-src="holder.js/100px25?theme=thumb&bg=55595c&fg=eceeef&text={{ $contact->firstName }}" alt="Card image cap">
                {{-- <img class="card-img-top" src="{{ asset('images/' . $id)}}" alt="Card image cap"> --}}
                <img class="card-img-top" src="{{ asset("images/$contact->image")}}" alt="Card image cap">
                <div class="card-body">
                    
                    <p class="card-text"> {{$contact->firstName}} {{ $contact->lastName }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
{{--                            <a href="contact/{{ $contact->firstName }}" class="btn btn-sm btn-outline-secondary">Profil</a>--}}

                        </div>
                        {{-- <small class="text-muted">{{ $id }} €</small> --}}
                        <small class="text-muted">{{ 'Serial Hacker' }}</small>
                    </div>
                </div>
                </a>
            </div>
        </div>
    @endforeach
@endsection


