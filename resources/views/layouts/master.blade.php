<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | @yield('head_title')</title>
        <link rel="shortcut icon" href="{{ asset('/img/laravel.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('/vendor/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/bower_components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/vendor/bower_components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
        <main class="py-4">
            @yield('content')
        </main>
    </body>
    <script src="{{ asset('/vendor/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/vendor/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</html>
