<!DOCTYPE HTML>
<html>
<head>
    <title>JT Tattoo Estudio</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]>
    <script src="/js/ie/html5shiv.js"></script><![endif]-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/css/ie8.css"/><![endif]-->
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="/css/ie9.css"/><![endif]-->
</head>
<body>

<!-- Header -->
<header id="header">
    <h1><a href="{{ ('/') }}">JC</a></h1>
    <a href="#nav">Menu</a>
</header>

<!-- Nav -->
<nav id="nav">
    <ul class="links">
        @guest
            <li>
                <a href="{{ ('log') }}"></a>
            </li>
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">Registrate</a>
                </li>
            @endif
        @else
            <li>
                <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id='logout-form' action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </li>
            <li>
                <a href="#">Galerias</a>
            </li>
            <li>
                <a href="#">Artistas</a>
            </li>
            <li>
                <a href="#">Citas</a>
            </li>
        @endguest
    </ul>
</nav>




<main>
    @yield('content')
</main>






<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li>
                <a href="https://www.instagram.com/jc_tattoostudio/?hl=es-la" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a>
            </li>
        </ul>
        <ul class="copyright">
            <li>JC Tattoo Estudio</li>
            <li>Diseño: Octavio Lara
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="/js/jquery.min.js"></script>
<script src="/js/skel.min.js"></script>
<script src="/js/util.js"></script>
<!--[if lte IE 8]>
<script src="/js/ie/respond.min.js"></script><![endif]-->
<script src="/js/main.js"></script>

</body>
</html>