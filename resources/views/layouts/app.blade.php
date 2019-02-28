<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">   
     <link rel="stylesheet" href="{{ URL::asset('css/style.css ') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<body>

<header>
    <nav id="nav">
        <div class="logo nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/BRANDY_1x.png" alt="brand-logo"></div>
        <ul class="nav-common">
            <li><a href="#">home</a></li>
            <li><a href="#products">products</a></li>
            <li><a href="#collections">collections</a></li>
            <li><a href="#blog">blog</a></li>
            <li><a href="#contact">contact</a></li>
            <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
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
        <div class="cart nav-icon nav-common"><a href="/panier"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412544/E-commerce%20landing%20page/icons/shopping_cart_1x.png" alt="shopping-cart"></a></div>
        <div class="menu nav-icon nav-common"><img src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412543/E-commerce%20landing%20page/icons/menu_1x.png" alt="hamburger-menu"></div>
    </nav>
    <div id="header-hero">
        <div class="header-bg"> <img src="img/head.webp"/> </div>
        <div class="header-content">
            <p class="heading-1">fashion collection</p>
            
            <p class="description"> </p>
            <div >
                <p></p>
            </div>
        </div>
    </div>
</header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
    <p class="copy-right"><img src="img/copyright.jpg" alt="copy right image" class="copy" /> 2019 all right recived </p>
    <p>privacy policy</p>
    <p>license</p>
</footer>
<div class="back-to-top">
<a href="#nav">
 <img title="Back to Top." src="https://res.cloudinary.com/de8cuyd0n/image/upload/v1520412541/E-commerce%20landing%20page/icons/back_-_top_1x.png" alt="back to top"></a> 
 </div>

</body>
</html>
