<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <title>IccTech</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #d7e0db;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .container {
                display:flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
            }

            a {
                text-decoration: none;
                color:#fff;
            }

            a:hover {
                color:#fff;
                text-decoration:none;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <img width="300px"  src="{{asset('img/logo.png')}}" alt="">

            @if (Route::has('login'))
            @auth

            <button class="btn btn-primary">
                <a href="{{url('/home') }}">Back Home</a>
            </button>
            @else
            <button class="btn btn-primary">
                <a href="{{ route('login') }}">Login Here</a>
            </button>
            @endauth
            @endif
            </div>
    </body>
</html>
