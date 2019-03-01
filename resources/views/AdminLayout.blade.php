<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('MetaTitle')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
</head>
<body>
<div class="content">
<div class="title m-b-md">


        @yield('contactTitle', 'Admin')


    </div>
    <div class="links">
    </div>
</div>
<div class="links">
    <a href="/admin">AdminHome</a>
    <a href="admin/create">Ajouter un produit</a>
    <a href="admin/contacts">Ajouter un contact</a>
    <a href="/">Retour à la navigation</a>
</div>
@yield('content')
</body>
</html>