<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Laravel')</title>
        <link href="{{ mix('css/tailwind.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mx-auto">
            @yield('content')
        </div>
    </body>
</html>
