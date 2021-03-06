<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon-192x192.png')}}" sizes="192x192">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.1/build/css/alertify.min.css" rel="stylesheet"/>
    @yield('styles')
    <script>
        APP_URL = '{{url('/')}}' ;
        AUTH_ID = '{{Auth::check() ? Auth::id(): null}}';
    </script>
</head>
    <body style="@yield('body_style')">

    <div id="app">
        @yield('content')
    </div>

    @yield('scripts')
    </body>
</html>
