<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rebelute</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ url('public/css/common.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{ url('public/lib/jquery-2.2.4.min.js') }}"></script>
    <link href="{{ url('public/lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ url('public/lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>

</head>
@if (Route::has('register'))
<div class="top-right links">
    <a href="{{ route('home_path') }}">Home</a>
    @auth
    <a href="{{ route('logout') }}">Logout</a>
    @else
    <a href="{{ route('register') }}">Register</a>
    @endauth
</div>
@endif
<body>
    <div class="flex-center position-ref">
        <div class="content">
            <div class="title m-b-md">
                Rebelute
            </div>

            <div class="links">
                <a href="http://rebelute.com/" target="_blank">Documentation</a>
                <a href="http://rebelute.com/" target="_blank">Laracasts</a>
                <a href="http://rebelute.com/" target="_blank">News</a>
                <a href="http://rebelute.com/" target="_blank">Forge</a>
                <a href="http://rebelute.com/" target="_blank">GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>
