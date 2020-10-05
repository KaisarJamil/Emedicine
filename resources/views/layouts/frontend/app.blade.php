<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title')-{{ config('', 'E MEDICINE') }}</title>

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animations.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}" class="color-switcher-link">
    <link rel="stylesheet" href="{{ asset('frontend/css/shop.css') }}" class="color-switcher-link">
    @stack('css')

</head>
<body>
    <div class="container_12">

        @include('layouts.frontend.inc.header')

        @yield('content')

    </div>

    @include('layouts.frontend.inc.footer')
    <script src="{{ asset('frontend/js/compressed.js') }}"></script>
    <script src="{{ asset('frontend/js/selectize.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <script src="https://use.fontawesome.com/9d8853db22.js"></script>

    @stack('js')
</body>
</html>
