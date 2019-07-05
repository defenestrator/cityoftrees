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
                background: white;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .twenty-vh {
                height:20vh;
            }

            .sunset {
                background: linear-gradient(rgba(55,141,202,1) 0%, rgba(126,192,238,1) 25%, rgba(252,176,69,1) 50% , #ff8739 75%);
            }
            .mask {
                background:transparent linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0) 50%, rgba(0, 0, 0, 0.5) 100%);
            }
            .forest{
                background:transparent url('/img/forest.png') no-repeat bottom right;
                background-size:cover;
                background-position-x:bottom;
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
                font-family:'Playfair Display', serif;
                color:white;
                font-weight:900;
            }

            .links > a {
                color: white;
                padding: 12.5px;
                font-size: 13px;
                font-weight: 600;
                line-height:2em;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-weight:900;
            }

            .m-b-md {
                margin: 30px 0;
            }

            .bottom-center {
                position:absolute;
                bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="position-ref full-height sunset">
            <div class="full-height forest">
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
        </div>
        {{-- <div class="position-ref flex-top twenty-vh" style="background-color:white; color:#0f0f0f;">
            <div class="content">
                <h2 style="">CBD for your health</h2>
            </div>
        </div>
        <div class="position-ref full-height flex-top" style="background-color:#0f0f0f; color:#fff;">
                <div class="content">
                    <h2 style="">Dr. Thomas Wiggins M.D.</h2>
                </div>
            </div> --}}
    </div>
    </body>
</html>
