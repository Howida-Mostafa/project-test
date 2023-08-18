<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->

    <!-- Syles-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
   <!-- @vite(['resources/css/app.css', 'resources/css/style.css']) -->
</head>
<body>
    <div id="app">
   
    @include('inc.navbar_dash')
        <div id="layoutSidenav" class="d-flex">
                @include('inc.sidebar')
            <main class="py-4 d-block w-100">
                @yield('content')
            </main>
        </div>    
    </div>
    <!-- // Scripts for normal dashboaard goes here -->
</body>
</html>
