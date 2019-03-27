<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('MetaTitle')</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}"/>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
    <div class="collapse navbar-collapse col-12" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto col">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Liste des produits</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Contact
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/contacts/Eric">Eric</a>
                    <a class="dropdown-item" href="/contacts/Mel">Mél</a>
                    <a class="dropdown-item" href="/contacts/Christophe">Christophe</a>
                    <a class="dropdown-item" href="/contacts/Cedric">Cedric</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin">Become an admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('orders/basket')}}">Panier</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @if ( Session::has('flash_message') )

        <div class="presentation alert {{ Session::get('flash_type') }}">
            <h3>{{ Session::get('flash_message') }}</h3>
        </div>
    @endif
</div>

<div class="container">
    @yield('title')
    <div class="row" >
        @yield('filters')
        <div class="row">
            @yield('listProd')
        </div>
    </div>
</div>

@yield('bottom')
</div>

<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white fixed-bottom">Copyright © Le bon marché 2019</p>
    </div>
</footer>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>