<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no"/>
	<title>{{ $title or 'RESERTEC' }}</title>
	<link rel="stylesheet" href="css/main.css">
	@yield('other-css')
	<link rel="shortcut icon" type="images/ico" href="images/favicon.ico">
	<!--[if lt IE 9]>
	<div style=' clear: both; text-align:center; position: relative;'>
	  <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
	    <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
	         alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
	  </a>
	</div>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
	</head>
	<body>
	<div class="page">
		<header>
			<div id="stuck_container" class="stuck_container">
			  <nav class="navbar navbar-default navbar-static-top ">
			    <div class="container">
			      <div class="navbar-header">
			        <h1>
			          <a data-type='rd-navbar-brand' href="{{ url('/') }}">
			            <img src="images/logo1.png" alt="" class="img-responsive" />
			          </a>
			        </h1>
			      </div>
					<?php $currentUrl = Route::current()->uri(); ?>
					<ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
			        	<li {{ $currentUrl === '' ? "class=active" : '' }}><a href="{{ url('/') }}">Inicio</a></li>
						<li {{ $currentUrl === 'nosotros' ? "class=active" : '' }}><a href="{{ url('nosotros') }}">Nosotros</a></li>
						<li {{ $currentUrl === 'clientes' ? "class=active" : '' }}><a href="{{ url('clientes') }}">Clientes</a></li>
						<li {{ $currentUrl === 'productos' ? "class=active" : '' }}><a href="{{ url('productos') }}">Productos</a></li>
						<li {{ $currentUrl === 'servicios' ? "class=active" : '' }}><a href="{{ url('servicios') }}">Servicios</a></li>
						<li {{ $currentUrl === 'galeria' ? "class=active" : '' }}><a href="{{ url('galeria') }}">Galería</a></li>
						<li {{ $currentUrl === 'contacto' ? "class=active" : '' }}><a href="{{ url('contacto') }}">Contacto</a></li>
					</ul>
			   </div>
			  </nav>
			</div>
			@if (isset($homeBanner))
			<section class="camera_container">
				<div class="jumbotron text-center">
					<div class="container wow fadeInLeft">
						<p class="head text-left">{!! $page->banner_inicio !!}</p>
					</div>
				</div>
				<div id="camera" class="camera_wrap">
					<div data-src="images/slide1.jpg">
						<div class="camera_caption fadeIn"></div>
					</div>
					<div data-src="images/slide2.jpg">
						<div class="camera_caption fadeIn"></div>
					</div>
				</div>
			</section>
			@endif
		</header>
		@yield('content')
		<footer>
			<div class="container-fluid">
				<address class="row text-center bg-before-footer">
				  <p>
				    <span class="red">Resertec SRL</span><br>
				    Av. San Borja Norte 1263<br>
				    Lima - 41 Perú<br>
				    436 4517 <span class="red">/</span> 436 6372 <span class="red">/</span> 436 6013
				</address>
			</div>
			<section class="well_foot-2">
				<div class="container">
					<img src="images/cranium.png" class="img-responsive" />
				</div>
			</section>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/rd-smoothscroll.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	@yield('other-script')
	<script src="js/tm-scripts.js"></script>
	</body>
</html>