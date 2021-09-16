<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Grocery List</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/1d41d71dcb.js" crossorigin="anonymous"></script>
        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
    <body>
        <x-header />
        <main>
            {{ $slot }}
        </main>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
