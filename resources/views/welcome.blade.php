<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    @include('style.layout')

    <!-- Fonts -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
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

            {{--<div class="content">--}}
                {{--<div class="title m-b-md">--}}
                    {{--Amber--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="http://127.0.0.1:8000/index">Index</a>--}}
                    {{--<a href="http://127.0.0.1:8000/dashboard">Dashboard</a>--}}
                    {{--<a href="http://127.0.0.1:8000/opdrachten">Opdrachten</a>--}}
                    {{--<a href="http://127.0.0.1:8000/contact">Contact</a>--}}
                    {{--<a href="https://hz.nl/">HZ</a>--}}
                    {{--<a href="https://hz.nl/secure">my-hz</a>--}}
                    {{--<a href="https://www.marumbibio.com/">Marum Bibio</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </body>
</html>

