<!DOCTYPE HTML>
<!--
	Retrospect by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>JcTattoo</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]>
		<script src="/js/ie/html5shiv.js"></script><![endif]-->
		<link href="{{ asset('css/main.css') }}" rel="stylesheet">
		<!--[if lte IE 8]><link rel="stylesheet" href=/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]>
		<link rel="stylesheet" href="/css/ie9.css"/><![endif]-->
	</head>
	<body class="landing">

		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="home.blade.php">JC</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="{{ ('/') }}">Inicio</a></li>
					<li><a href="{{ ('/microblading')  }}">Servicios</a></li>
					<li><a href="{{ ('/galeria') }}">Galeria</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<h2>Jc Tattoo Estudio</h2>
				<p>La casa del tatuaje de maturín</p>
				<ul class="actions">
					<li><a href="#" class="button big special">Contacto</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="/images/micb.jpg" alt="" style="height: 358px; width: 576px;"/></span>
						<div class="content">
							<h2>Microblading</h2>
							<p>El microblading es una técnica de maquillajepermanente, cuyo objetivo es corregir o reconstruir completamente una ceja carente de pelo o ausente, realizando pelos de forma artística, creando un efecto hiperrealista y natural.</p>
							<ul class="actions">
								<li>
									<a href="{{ ('/microblading')  }}" class="button alt">Más</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="/images/tat1.jpg" alt="" style="height: 358px; width: 576px;"/></span>
						<div class="content">
							<h2>Jairo Contreras</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="#" class="button alt">Más</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature left">
						<span class="image"><img src="/images/tat2.jpg" alt="" style="height: 358px; width: 576px;"/></span>
						<div class="content">
							<h2>Monza</h2>
							<p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est.</p>
							<ul class="actions">
								<li>
									<a href="{{ ('monza') }}" class="button alt">Más</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow">
						<h2>Galeria</h2>
					</header>
					<div class="box alt">
						<div class="row 50% uniform">
							<div class="4u"><span class="image fit"><img src="/images/pic01.jpg" alt="" /></span></div>
							<div class="4u"><span class="image fit"><img src="/images/pic02.jpg" alt="" /></span></div>
							<div class="4u$"><span class="image fit"><img src="/images/img2.jpeg" alt="" /></span></div>
							<div class="4u"><span class="image fit"><img src="/images/pic05.jpg" alt="" /></span></div>
							<div class="4u"><span class="image fit"><img src="/images/pic03.jpg" alt="" /></span></div>
							<div class="4u$"><span class="image fit"><img src="/images/pic04.jpg" alt="" /></span></div>
							<div class="4u"><span class="image fit"><img src="/images/pic06.jpg" alt="" /></span></div>
							<div class="4u"><span class="image fit"><img src="/images/pic07.jpg" alt="" /></span></div>
							<div class="4u$"><span class="image fit"><img src="/images/pic08.jpg" alt="" /></span></div>
						</div>
					</div>

					<ul class="actions">
						<li><a href="{{ ('galeria') }}" class="button big alt">Ir</a></li>
					</ul>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special">
				<div class="inner">
					<header class="major narrow	">
						<h2>Reservaciones y Presupuestos</h2>
					</header>
					<ul class="actions">
						<li><a href="{{ ('/presupuesto') }}" class="button big alt">Más</a></li>
					</ul>
				</div>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>¿Alguna pregunta?</h2>
						<p>Contactanos y responderemos tus dudas</p>
					</header>
					<form action="#" method="POST">
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Nombre" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Correo Electronico" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" placeholder="Mensaje" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Enviar" /></li>
							<li><input type="reset" class="alt" value="Borrar" /></li>
						</ul>
					</form>
				</div>
			</section>

		<!-- Footer -->
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
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
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