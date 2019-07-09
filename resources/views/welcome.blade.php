<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400|Playfair+Display:400,900&display=swap&subset=latin-ext"
        rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background: white;
            color: #353939;
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 100;
            margin: 0;
        }

        h1 {
            font-weight:900;
        }

        h2 {
            line-height:1.5rem;
            letter-spacing:0.2rem;
            font-weight:400;
        }

        h3 {
            font-weight:100;
        }

        .full-height {
            height: 85vh;
        }

        .twenty-vh {
            height: 25vh;
        }

        /* .mask {
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.0) 50%, rgba(255, 255, 255, 0.9) 100%);
        } */

        .forest {
            width:100%;
            background: transparent url('/img/forest-honeydew.png') no-repeat top right;
            background-size: cover;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .flex-top {
            align-items: top;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 64px;
            font-family: 'Playfair Display', serif;
            color: #353839;
            font-weight: 900;
        }

        .links>a {
            color: #353839;
            padding: 12.5px;
            font-size: 13px;
            font-weight: 600;
            line-height: 2em;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            font-weight: 400;
        }

        .m-b-md {
            margin: 30px 0;
        }

        .fixed-bottom {
            position: fixed;
            bottom: 0px;
            background: black;
            color:white;
        }

    </style>
</head>

<body>
    <div class="position-ref full-height forest">
            <div class="flex-center full-height mask">
                <div class="top-right links">
                    @if (Route::has('login'))
                    @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a href="#">Shop</a>
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                    @endif
                </div>
                <div class="content">
                    <div class="title m-b-md">
                        {{ config('app.name') }}<br>CBD
                    </div>
                </div>
            </div>
            <div class="position-ref twenty-vh flex-top" style="background-color:#353839; color:#fff;">
                <div class="content">
                    <h2>In cooperation with <br>Dr. Thomas Wiggins M.D.</h2>
                </div>
            </div>
            <div class="position-ref flex-top" style="background-color:#353839; color:#fff;">
                <div class="content">
                    <h3>Grand Opening &mdash; Summer 2019</h3>
                </div>
            </div>
    </div>
</body>

</html>
