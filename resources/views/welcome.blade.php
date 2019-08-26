<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Info Web Page">
        <meta name="keywords" content="Name Surname, Web Development, Web Design, Graphic Design, PHP, Laravel, Javascript, HTML, CSS">
        <meta name="author" content="Name Surname">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Info | Welcome</title>

        <!-- Favicon Icon -->
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

        <!-- CSS -->
        {{ Html::style('css/app.css') }}

        {{-- Vanta.js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/100/three.min.js"></script>
        <script src="https://www.vantajs.com/dist/vanta.net.min.js"></script>

    </head>
    <body>
        <div id="app">
            @include('main')
        </div>

        <div id="preloader" class="spinner"></div>

        <!-- BASIC SCRIPT -->
        {{ Html::script('js/app.js') }}
    </body>
</html>