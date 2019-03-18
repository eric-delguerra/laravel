@extends('layout_view_products')

@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')

@section('show_products')
    @foreach($products as $prod)
        <!--<a href="products/{{ $prod->id }}"</a>-->
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px25?theme=thumb&bg=55595c&fg=eceeef&text={{ $prod->title }}" alt="Card image cap">
                <img class="card-img-top" src="{{ asset('images/' . $prod->vignette)}}" alt="Card image cap">
                <div class="card-body">
                    <!--<p class="card-text">{{ $prod->title }}</p>-->
                    <p class="card-text">{{ $prod->content }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="products/{{ $prod->id }}" class="btn btn-sm btn-outline-secondary">Détails de l'article</a>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Ajouter au panier</button>
                        </div>
                        <small class="text-muted">{{ $prod->price }} €</small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection