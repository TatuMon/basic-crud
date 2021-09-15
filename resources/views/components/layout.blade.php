<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Grocery List</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://kit.fontawesome.com/1d41d71dcb.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>

        </header>
        <main>
            {{ $slot }}
        </main>
    </body>
</html>
