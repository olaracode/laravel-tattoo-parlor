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
        <li><a href="{{ ('/') }}">Inicio</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="{{ ('galeria') }}">Galeria</a></li>
    </ul>
</nav>




<main>
    @yield('content')
</main>






<footer id="footer">
    <div class="inner">
        <ul class="icons">
            <li><a href="#" class="icon fa-facebook">
                    <span class="label">Facebook</span>
                </a></li>
            <li><a href="#" class="icon fa-twitter">
                    <span class="label">Twitter</span>
                </a></li>
            <li><a href="#" class="icon fa-instagram">
                    <span class="label">Instagram</span>
                </a></li>
            <li><a href="#" class="icon fa-linkedin">
                    <span class="label">LinkedIn</span>
                </a></li>
        </ul>
        <ul class="copyright">
            <li>&copy;JC Tattoo Estudio</li>
            <li>Imagenes: JC Tattoo Estudio</li>
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