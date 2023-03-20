<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hunt: Showdown Journal</title>

        <link rel="stylesheet" href="/css/pico.min.css">
        <link rel="stylesheet" href="/css/hunt-journal.css">
    </head>
    <body>
        <x-navigation></x-navigation>

        {{ $slot }}

        <footer class="container">
            <p>&copy; {{ date('Y') }}</p>
        </footer>
    </body>
</html>
