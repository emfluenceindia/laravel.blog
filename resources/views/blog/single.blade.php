<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div>
            {{$slug}}
        </div>
        <div class="bg-gradient-to-br from-purple-900 to-indigo-900 flex flex-wrap item-center justify-center min-h-screen">
            <a href="">Home</a> | <a href="/products">Products</a> | <a href="/about">About</a> | <a href="/contact">Contact</a>
        </div>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
