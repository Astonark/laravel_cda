<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/main.scss'])
        <title>Laravel</title>
    </head>
    <body>
        @include('layout.header')
        @yield('content')
        @include('layout.footer')
    </body>
</html>
