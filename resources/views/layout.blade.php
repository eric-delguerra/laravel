


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
<div class="links">
    <a href="/">Home</a>
    <a href="/products">Liste des produits</a>
    <a href="/product">Produit</a>
    <a href="/basket">Panier</a>
    <a href="/contacts">Contact</a>
</div>


<div class="content">
    <div class="title m-b-md">
        <div class="links">
            @yield('listContact')
        </div>
        @yield('content')
        @yield('contact')
    </div>
 @yield('petitforeach')
</div>






</body>
</html>