@extends('layouts.master_web')

@section('content')
<section class="well well1">
	<div class="container">
		<div class="col-sm-12">
			<div class="row" id="main-products">
				<div class="col-sm-15 col-xs-6 wow fadeInLeft" data-wow-delay=".9s">
					<a href="{{ url('nosotros') }}" class="content-icon">
						<img src="{{ asset('images/page-1_img1.jpg') }}" alt="Nosotros" class="imgicons img-responsive center-block"/>
					</a>
					<div class="ins_r text-center"><a href="{{ url('nosotros') }}">NOSOTROS</a></div>
				</div>
				<div class="col-sm-15 col-xs-6 wow fadeInLeft" data-wow-delay=".7s">
					<a href="{{ url('clientes') }}" class="content-icon"><img src="{{ asset('images/page-1_img2.jpg') }}" alt="Clientes" class="imgicons img-responsive center-block"/></a>
					<div class="ins_r text-center"><a href="{{ url('clientes') }}">CLIENTES</a></div>
				</div>
				<div class="col-sm-15 col-xs-6 wow fadeInLeft" data-wow-delay=".5s">
					<a href="{{ url('productos') }}" class="content-icon"><img src="{{ asset('images/page-1_img3.jpg') }}" alt="Productos" class="imgicons img-responsive center-block"/></a>
					<div class="ins_r text-center"><a href="{{ url('productos') }}">PRODUCTOS</a></div>
				</div>
				<div class="col-sm-15 col-xs-6 wow fadeInLeft" data-wow-delay=".3s">
					<a href="{{ url('servicios') }}" class="content-icon"><img src="{{ asset('images/page-1_img4.jpg') }}" alt="Servicios" class="imgicons img-responsive center-block"/></a>
					<div class="ins_r text-center"><a href="{{ url('servicios') }}">SERVICIOS</a></div>
				</div>
				<div class="col-sm-15 col-xs-6 wow fadeInLeft" data-wow-delay=".3s">
					<a href="{{ url('contacto') }}" class="content-icon"><img src="{{ asset('images/page-1_img5.jpg') }}" alt="Contacto" class="imgicons img-responsive center-block"/></a>
					<div class="ins_r text-center"><a href="{{ url('contacto') }}">CONTACTO</a></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="well well2 parallax bg-trans bg-bottom" data-url="images/parallax1.jpg" data-mobile="true" data-speed="0.6">
	<div class="container text-center">
		<h2 class="text-shadow-black">SOMOS UNA COMPAÑÍA LÍDER</h2>
		<p class="white ins1 offs1 sub-title">
			En el campo de instrumentación de plantas de Hidrocarburos y<br>servicios de perforación con más de 43 años de experiencia.
		</p>
		<div class="mailform-sub col-sm-12">
			<div class="form-group mfControls">
				<a class="btnv" href="{{ url('nosotros') }}">+ Ver más</a>
			</div>
		</div>
	</div>
</section>

<section class="well wellnosline bg-primary">
	<div class="container">
		<div class="mailform-sub">
		</div>
	</div>
</section>

<section class="well well3 text-center">
	<div class="container-fluid">
		<h3 class="red">CLIENTES</h3>
		<p class="fs1-7em red">Nuestros clientes se encuentran entre las empresas lideres del mercado.</p>
		<div class="row bg-black">
			<div class="col-sm-12">
				<div class="container">
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".7s">
						<div class="thumbnail thumbnail4">
							<img src="{{ asset('images/page-1_img5origen.png') }}" alt="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".5s">
						<div class="thumbnail thumbnail4">
							<img src="{{ asset('images/page-1_img6.png') }}" alt="">
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay=".3s">
						<div class="thumbnail thumbnail4">
							<img src="{{ asset('images/page-1_img7.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mailform-sub col-sm-12">
			<div class="form-group mfControls">
				<a class="btnv" href="{{ url('clientes') }}">+ Ver más</a>
			</div>
		</div>
	</div>
</section>

<div class="content-middle-banners">
	<section class="well well4 parallax text-center" id="productos" data-url="images/parallax2.jpg" data-mobile="true">
		<div class="container">
			<h2 class="text-shadow-black">PRODUCTOS</h2>
			<p class="white ins1 sub-title title-md">
				Nuestros productos pertenecen a las marcas más prestigiosas y reconocidas de la industria, por lo que se adaptan de manera optima a la solución que el cliente necesita.</p>
			<div class="mailform-sub col-sm-12">
				<div class="form-group mfControls">
					<a class="btnv" href="{{ url('productos') }}">+ Leer más</a>
				</div>
			</div>
		</div>
	</section>
	<section class="well well4 parallax text-center" id="servicios" data-url="images/parallax3.jpg" data-mobile="true" data-speed="0.6">
		<div class="container">
			<h2 class="text-shadow-black">SERVICIOS</h2>
			<div class="col-sm-12">
				<p class="white sub-title title-md line-he-m">Nuestros 43 años de experiencia nos han permitido trabajar con las empresas más destacadas  en los rubros de Petróleo, Gas, Energía y Minería. Nuestros servicios incluyen ingeniería, montaje, puesta en marcha, trabajos electrónicos, eléctricos y metalmecánicos que garantizan el óptimo funcionamiento de los equipos instalados, así como el apoyo técnico correspondiente.
				</p>
				<div class="mailform-sub col-sm-12">
					<div class="form-group mfControls">
						<a class="btnv" href="{{ url('servicios') }}">+ Leer más</a>
					</div>
				</div>
			</div>
	</section>
</div>

<section class="well well5">
	<div class="container">
		<ul class="wow fadeInLeft vision-mision" data-wow-duration="2s">
			<li class="col-md-6 col-sm-6 col-xs-12 border-right">
				<div>
					<h6>VISIÓN</h6>
					<p class="sub-title title-sm line-he-m text-justify no-txt-shadow">“CONVERTIRNOS EN EL PROVEEDOR PREFERIDO POR NUESTROS CLIENTES A NIVEL NACIONAL EN SERVICIOS Y PRODUCTOS ESPECIALIZADOS EN LA INDUSTRIA DE GAS, PETRÓLEO, ENERGÍA Y MINERÍA”.
					</p>
				</div>
			</li>
			<li class="col-md-6 col-sm-6 col-xs-12">
				<div>
					<h6>MISIÓN</h6>
					<p class="sub-title title-sm line-he-m text-justify no-txt-shadow">“BRINDARLE A NUESTROS CLIENTES SERVICIOS, EQUIPAMIENTO MECÁNICO E INSTRUMENTACIÓN DE PRIMERA CALIDAD EN LA INDUSTRIA DE GAS, PETRÓLEO, ENERGÍA Y MINERÍA, PROPORCIONÁNDOLES LA MEJOR SOLUCIÓN TÉCNICA”.
					</p>
				</div>
			</li>
		</ul>
	</div>
</section>
<section class="well well6 bg-primary" id="contactos">
	<div class="container">
		<div class="mailform-sub col-md-9 col-md-offset-3">
			<p>Contáctanos</p>
			<form class='mailform' method="post" action="newsletter" data-type="contact">
				<div class="form-group" data-add-placeholder>
					<label for="mailform-input-email">Escribe tu email</label>
					<input id="mailform-input-email" type="text" name="correo" data-constraints="@Email @NotEmpty"/>
				</div>
				<div class="form-group mfControls">
					<button class="btn" type="submit">SUBSCRIBE</button>
				</div>
			</form>
		</div>
	</div>
</section>
<div class="map">
	<div><img src="{{ asset('images/adress.png') }}" alt="" class="img-responsive center-block" /></div>
</div>
@endsection