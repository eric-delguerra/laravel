


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


<div class="content">
    <div class="title m-b-md">
        <div class="links">
            @foreach($contacts as $contact)
                <a href="{{ $contact['link'] }}">{{ $contact['name'] }}</a>
            @endforeach
        </div>
        @yield('content')
    </div>
    @yield('contact')
</div>
@yield('petitforeach')
</div>
</body>
</html>