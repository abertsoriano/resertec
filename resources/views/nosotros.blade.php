@extends('layouts.master_web')

@section('content')
<section class="well well1">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
        <img src="{{ asset('images/page-1_img1.jpg') }}" alt="" class="center-block" />
        <h5 class="ins_r text-center sub-title no-txt-shadow">NOSOTROS</h5>
      </div>
      <div class="col-sm-2 hidden-xs"></div>
      <div class="col-md-2 hidden-xs"></div>
    </div>
  </div>
</section>
<section class="well well5nosotros">
  <div class="container">
    <ul class="wow fadeInLeft" data-wow-duration="2s">
      <li class="navbarbarra col-md-12 col-sm-12 col-xs-12">
        <div>
          <p class="text-justify line-he-xl p-fix">
            Somos una compañía líder en el campo de instrumentación de plantas de Hidrocarburos y servicios de perforación, con más de 43 años de experiencia. Tenemos la representación de las más sólidas marcas del rubro, con técnicos y profesionales especializados en la instrumentación de equipos de precisión para la medición y control de flujo, supervisión de stock en tanques, control automatizado de válvulas, integración por software, calibración de contómetros, fabricación de tanques de aditivación y patrones volumétricos, entre otros servicios que su empresa necesita.Contamos con el servicio de alquiler de herramientas para perforación y representamos a una de las compañías más sólidas en el servicio de coring. Nuestros servicios incluyen trabajos electrónicos, eléctricos y metalmecánicos que garantizan el perfecto funcionamiento de los equipos instalados, así como del apoyo técnico correspondiente, comprometiéndonos con su completa satisfacción.
          </p>
        </div>
      </li>
    </ul>
  </div>
</section>
<section class="well well2nosotros parallax text-center bg-trans bg-bottom" data-url="images/nosotros.jpg" data-mobile="true" data-speed="0.6">
</section>
<section class="well wellnosline bg-primary"></section>

<section class="well well5">
  <div class="container">
    <ul class="wow fadeInLeft" data-wow-duration="2s">
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
@endsection