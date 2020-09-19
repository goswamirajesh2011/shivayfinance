<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Shivay Finance') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/slick/slick.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/slick/slick-theme.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        @include('layouts.common.front.navigation')
        <main class="content">
            @yield('content')
        </main>
        @include('layouts.common.front.footer')
    </div>

    <script src="{{ asset('public/js/jquery-2.2.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('public/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
    @yield('js')
</body>
</html>
