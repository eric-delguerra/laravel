@extends ('layout_view_contacts')

@section('contact')




        <div class="col-md-3">
            <div class="card mb-4 box-shadow">
                 <img class="card-img-top" data-src="holder.js/100px25?theme=thumb&bg=55595c&fg=eceeef&text={{ $contact['firstName'] }}" alt="Card image cap">
                {{--<img class="card-img-top" data-src="holder.js/100px25?theme=thumb&bg=55595c&fg=eceeef&text={{ $contact['firstName'] }}" alt="Card image cap">--}}

                <img class="card-img-top" src="{{ asset('images/' . $contact['image'])}}" alt="Card image cap">
                <div class="card-body">

                    <p class="card-text"> {{$contact->firstName}} {{ $contact['lastName'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            {{--<a href="contact/{{ $contact->id }}" class="btn btn-sm btn-outline-secondary">Profil</a>--}}
                            {{--<button type="button" class="btn btn-sm btn-outline-secondary">Contact</button>--}}
                        </div>
                        {{-- <small class="text-muted">{{ $id }} €</small> --}}
                        <small class="text-muted">{{ 'Serial Hacker' }}</small>
                    </div>
                </div>
            </div>
        </div>
            <div class = "descriptions">{{$contact->description}} </div>

@endsection
