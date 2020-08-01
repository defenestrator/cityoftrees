<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="100x100" href="/favicon.png">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'City of Trees') }}</title>
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
</head>
<body class="antialiased leading-none">
    <div id="app" class="forest full-height h-screen">
        <nav class="py-6 px-2">
            <div class="container mx-auto px-2 md:px-1">
                <div class="flex items-center justify-center text-gray-800">
                    <div class="">
                        <a href="{{ url('/') }}" class="text-lg font-serif font-black">
                            {{ config('app.name', 'City of Trees') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right nav-links text-sm mx-1">
                        @guest
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        @else
                        @if(Auth::user()->email == 'jeremyblc@gmail.com')
                            <a href="/admin">Admin</a>
                        @endif
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                {{ csrf_field() }}
                            </form>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>
        @isset($messages)
        @include('partials.flash.message')
        @endif
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
