

@extends ('layout');



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
    <a href="/">
        <img src="{{ asset('images/home.png') }}" alt="logoHome"></div>
<div class="links">
    Home</a>
</div>
<p class="ProdName">
    Pinard<br />
    <img src="{{ asset('images/pinard.jpg') }}" alt="photo d'une bouteille de pinard">

</p>
<div class="description">
    Cupcake ipsum dolor sit amet. Bear claw chupa chups jujubes pudding soufflé liquorice jelly beans carrot cake.<br/>
    Macaroon bonbon candy chocolate donut cotton candy. Toffee icing cheesecake jelly cheesecake chocolate cake oat cake powder dessert.<br/>
    Icing cupcake jelly cookie sugar plum croissant chupa chups candy canes.
    Pie carrot cake cheesecake topping jelly beans candy wafer lollipop cake.
</div>

<p class="prix">Prix : 56E</p>

<div class="links">
    <a href="/products">Liste des produits</a>
    <a href="/product">Produit</a>
    <a href="/basket">Panier</a>
    <a href="/contacts">Contact</a>
</div>


<div class="content">
    <div class="title m-b-md">
        @yield('content')
    </div>
    @yield('contact')
</div>
@yield('petitforeach')
</div>
</body>
</html>
