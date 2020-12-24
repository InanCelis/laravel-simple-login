<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel | @yield('head_title')</title>
        <link rel="shortcut icon" href="{{ asset('/img/laravel.png') }}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('/components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/components/Ionicons/css/ionicons.min.css') }}">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Laravel Sample Login</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a class="navbar-brand" href="#">
                            {{ $user->profile->first_name }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <span class="glyphicon glyphicon-log-in"></span> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <section>
            @yield('content')
        </section>
    </body>
    <script src="{{ asset('/components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('/components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</html>
