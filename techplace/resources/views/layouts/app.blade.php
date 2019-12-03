<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{--<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Be+Vietnam&display=swap" rel="stylesheet">
    <script src="../../../public/js/index.js"></script>
</head>

<header>
    <div class ="header">
        <ul>
            <li><a class="active" href="/catalogue">Liberty Commerce</a></li>
            <li><a class="log" href="/login">My Account</a></li>
            <li><a class="panier" href="/basket">Basket</a></li>
        </ul>
    </div>
    <div class ="header">
        <ul class="nav2">
            <li><a class="nav20" href="/catalogue">Catalogue</a></li>
            <li><a class="nav20" href="/phone">Phone</a></li>
            <li><a class="nav20" href="/tablet">Tablet</a></li>
            <li><a class="nav20" href="/laptop">Laptop</a></li>
            <li><a class="nav20" href="/software">Software</a></li>
            <li><a class="nav20" href="/console">Console</a></li>
            <input type="text" placeholder="Search..">
            <li><a class="logout" href="/logout">Logout</a></li>
        </ul>
    </div>

</header>
<body>
@yield('content')
</body>


{{--<div id="app">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            @endif
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>--}}
<footer>
    <section>
        <article>
            <div class="div_footer">
                <ul>
                    <li><a class="footerbf" href="about:blank" class="fb_tw"><img src="img/fb.png"  width="50px" height="50px"></a></li>
                    <li><a class="footertw" href="about:blank" class="fb_tw"><img src="img/twitter.png" width="50px" height="50px"></a></li>
                    <li><a class="footerinst" href="about:blank" class="fb_tw"><img src="img/insta.png" width="50px" height="50px"></a></li>
                </ul>
            </div>
        </article>
    </section>
</footer>

</html>

