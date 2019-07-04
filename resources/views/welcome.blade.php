<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,400|Playfair+Display:400,900&display=swap&subset=latin-ext" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background: rgb(55,141,202);
                background: linear-gradient(rgba(55,141,202,1) 0%, rgba(126,192,238,1) 30%, rgba(252,176,69,1) 100%);
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                background:transparent url('/img/forest-4143244.png') no-repeat bottom right;
                background-size:cover;
            }

            .flex-center {
                align-items: center;
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
                font-family:'Playfair Display', serif;
                color:white;
                font-weight:900;
            }

            .subtitle {

                margin:0 auto;
                font-family:'Playfair Display', serif;
                font-size:24px;
                position:absolute;
                bottom:90px;
            }
            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bottom-center {
                margin:0 auto;
                position:absolute;
                bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="top-right links">
                <a href="#">Shop</a>
                <a href="#">Subscribe</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    {{ config('app.name') }}<br>CBD

                </div>
                @if (Route::has('login'))
                <div class="links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            </div>
        </div>
    </body>
</html>
