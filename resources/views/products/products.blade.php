@extends('newLayout')


@section('MetaTitle', 'Produits')

@section('content', 'Liste des produits')
@section('filters')

    <div class="row tri">
        <div>
            <a href="/products?price" class="btn btn-outline-info">
                Trier par prix
            </a>
        </div>
        <div>
            <a href="/products" class="btn btn-outline-info">
                Trier par nom
            </a>
        </div>
        <div>
            <a href="/products?stock" class="btn btn-outline-info">
                Trier par quantité
            </a>
        </div>
    </div>

@endsection

@section('carousel')
    <div class="col-lg-9">
        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection

@section('listProd')
    @foreach($products as $prod)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <div style="width: 100%; height: 300px; overflow: hidden">
                    <a href="product/{{ $prod->id }}"><img class="card-img-top" src="{{ asset("images/$prod->img") }}"
                                                           alt="{{ $prod->name }}" "></a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="product/{{ $prod->id }}">{{ $prod->name }}</a>
                    </h4>
                    <h5>{{ $prod->price/100 }} €</h5>
                    @if($prod->stock < 1)
                        <p style="color: red;">Produit indisponnible</p>
                    @endif
                    <p class="card-text">{{str_limit($prod->description,$words = 25, $end = '...') }}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">★ ★ ★ ★ ☆</small>
                </div>
            </div>
        </div>
    @endforeach
@endsection