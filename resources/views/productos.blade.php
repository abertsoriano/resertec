@extends('layouts.master_web')

@section('other-css')
<link rel="stylesheet" href="{{ asset('js/slick/slick.css') }}">
<link rel="stylesheet" href="{{ asset('js/slick/slick-theme.css') }}">
@endsection

@section('content')
<section class="well well1">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
				<img src="{{ asset('images/page-1_img3.jpg') }}" alt="" class="center-block" />
				<h5 class="ins_r text-center sub-title no-txt-shadow">PRODUCTOS</h5>
			</div>
			<div class="col-sm-2 hidden-xs"></div>
			<div class="col-md-2 hidden-xs"></div>
		</div>
	</div>
</section>
<section class="well" data-mobile="true" data-speed="0.6">
	<div class="container">
		<div id="logo-products">
			<div>
				<a href="http://www.aberdeendynamics.com" target="_blank" title="Ir a www.aberdeendynamics.com">
					<img src="{{ asset('images/logos/a_dynamics.jpg') }}" alt="Dynamics" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.akersolutions.com" target="_blank" title="Ir a www.akersolutions.com">
					<img src="{{ asset('images/logos/akerSolutions.jpg') }}" alt="Aker Solutions" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.broncomfg.com" target="_blank" title="Ir a www.broncomfg.com">
					<img src="{{ asset('images/logos/bronco.jpg') }}" alt="Bronco" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.schillig.com.ar" target="_blank" title="Ir a www.schillig.com.ar">
					<img src="{{ asset('images/logos/bruno_schillig.jpg') }}" alt="Bruno Schillig" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.christycatalytics.com" target="_blank" title="Ir a www.christycatalytics.com">
					<img src="{{ asset('images/logos/catalytics.jpg') }}" alt="Catalytics" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.clampon.com" target="_blank" title="Ir a www.clampon.com">
					<img src="{{ asset('images/logos/clampon.jpg') }}" alt="Clampon" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.corpro-group.com" target="_blank" title="Ir a www.corpro-group.com">
					<img src="{{ asset('images/logos/corpro.jpg') }}" alt="Corpro" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.crunchoil.com" target="_blank" title="Ir a www.crunchoil.com">
					<img src="{{ asset('images/logos/crunch_oil.jpg') }}" alt="Crunch Oil" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.eckel.com" target="_blank" title="Ir a www.eckel.com">
					<img src="{{ asset('images/logos/eckel.jpg') }}" alt="Eckel" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.geecsales.com" target="_blank" title="Ir a www.geecsales.com">
					<img src="{{ asset('images/logos/energroup.jpg') }}" alt="Energroup" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.sfpathway.com" target="_blank" title="Ir a www.sfpathway.com">
					<img src="{{ asset('images/logos/flexonics.jpg') }}" alt="Flexonics" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.forum-aoi.com" target="_blank" title="Ir a www.forum-aoi.com">
					<img src="{{ asset('images/logos/forum.jpg') }}" alt="Forum" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.grothcorp.com" target="_blank" title="Ir a www.grothcorp.com">
					<img src="{{ asset('images/logos/groth.jpg') }}" alt="Groth" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.enraf.com" target="_blank" title="Ir a www.enraf.com">
					<img src="{{ asset('images/logos/honeywell.jpg') }}" alt="Honeywell" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.lancasterflow.com" target="_blank" title="Ir a www.lancasterflow.com">
					<img src="{{ asset('images/logos/ifa_company.jpg') }}" alt="Ifa Company" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.plidco.com" target="_blank" title="Ir a www.plidco.com">
					<img src="{{ asset('images/logos/plidco.jpg') }}" alt="Plidco" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://gi.weebly.com" target="_blank">
					<img src="{{ asset('images/logos/red_sgi.jpg') }}" alt="Red Sgi" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.scully.com" target="_blank" title="Ir a www.scully.com">
					<img src="{{ asset('images/logos/scully.jpg') }}" alt="Scully" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.sofec.com" target="_blank" title="Ir a www.sofec.com">
					<img src="{{ asset('images/logos/sofec.jpg') }}" alt="Sofec" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.tapcoempro.com" target="_blank" title="Ir a www.tapcoempro.com">
					<img src="{{ asset('images/logos/tapcoenpro.jpg') }}" alt="Tapcoenpro" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.teledrift.com" target="_blank" title="Ir a www.teledrift.com">
					<img src="{{ asset('images/logos/teledrift.jpg') }}" alt="Teledrift" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.terceloilfield.com" target="_blank" title="Ir a www.terceloilfield.com">
					<img src="{{ asset('images/logos/tercel.jpg') }}" alt="Tercel" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.tdwilliamson.com" target="_blank" title="Ir a www.tdwilliamson.com">
					<img src="{{ asset('images/logos/twd.jpg') }}" alt="Twd" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.ultraflote.com" target="_blank" title="Ir a www.ultraflote.com">
					<img src="{{ asset('images/logos/ultraflote.jpg') }}" alt="Ultraflote" class="center-block">
				</a>
			</div>
			<div>
				<a href="http://www.wwtco.com" target="_blank" title="Ir a www.wwtco.com">
					<img src="{{ asset('images/logos/western.jpg') }}" alt="Western" class="center-block">
				</a>
			</div>
		</div>
	</div>
</section>
<section class="well relative">
	<div class="product-title">
		<div class="product-middle-bar"></div>
		<h3 class="text-center">LISTA DE REPRESENTADAS</h3>
	</div>
	<div class="container table-products">
		<div class="table-responsive">
			<table class="table">
				<tbody>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle" style="width: 28%"><img src="{{ asset('images/logos/fmc.png') }}" alt="FMC Tecnologies" class="img-responsive"></td>
					<td class="middle hidden-xs" style="width: 22%">
						<span>FMC MEASUREMENT SOLUTIONS - SMITH METER</span>
					</td>
					<td class="table-content middle" style="width: 50%">
						<p>Medidores de Desplazamiento Positivo, Turbina, Másicos, Ultrasonido y Placas de Oriﬁcio. Controladores de Carga Accuload, Válvulas de Control. Computadoras de Flujo<br>
							<a href="#">www.fmctechnologies.com/MeasurementSolutions</a></p>
						<p>
							“Oil in Water” analizadores y monitores; micro válvulas, válvulas de control, de contrapresión, de descarga; interruptores de presión.
							<br>
							<a href="#">www.fmctechnologies.com/en/FluidControl/Technologies/Invalco.aspx</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/twd.jpg') }}" alt="" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>TD WILLIAMSON</span>
					</td>
					<td class="table-content middle">
						<p>Raspatubos (pigs), máquinas para reparación y mantenimiento de tuberías bajo presión (Hot Tap & Plugging). Sistemas para Lanzamiento y Recepción de Raspatubos y Esferas.</p>
						<p><a href="#">www.tdwilliamson.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/honeywell.png') }}" alt="HONEYWELL ENRAF TERMINAL AUTOMATION" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>HONEYWELL ENRAF<br>TERMINAL AUTOMATION</span>
						<span>HONEYWELL ENRAF<br>FLUID TECHNOLOGY</span>
					</td>
					<td class="table-content middle">
						<p>Medidores de Nivel tipo Servo y Radar. Sistemas para Supervisión de Volumen en Patios de Tanques.
							<br><a href="http://www.enraf.com">www.enraf.com</a></p>
						<p>
							Sistemas y accesorios para Inyección de Aditivos y Sistemas de mezcla.(Blending)
							<br><a href="http://www.enraf.com">www.enraf.com</a></p>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/plidco.jpg') }}" alt="" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>PLIDCO</span>
					</td>
					<td class="table-content middle">
						<p>Grampas para reparación de tuberías bajo presión.</p>
						<p><a href="http://www.plidco.com">www.plidco.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/redlands.png') }}" alt="REDLANDS" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>REDLANDS</span>
					</td>
					<td class="table-content middle">
						<p>
							Brazos de Carga para Terminales y Plantas de Venta. Uniones Giratorias.
							<br><a href="http://www.redlands.com.br">www.redlands.com.br</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/scully.png') }}" alt="" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>SCULLY SIGNAL CO.</span>
					</td>
					<td class="table-content middle">
						<p>Sistemas de Protección, Sobrellenado y Puesta a Tierra.
							<br><a href="http://www.scully.com">www.scully.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/akerSolutions.jpg') }}" alt="Aker Solutions" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>AKER SOLUTIONS – Woodﬁeld Systems Limited</span>
					</td>
					<td class="table-content middle">
						<p>
							Brazos de Carga Marinos.
							<br><a href="http://www.akersolutions.com">www.akersolutions.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/tapcoenpro.jpg') }}" alt="Tapco Empro" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>TAPCO EMPRO</span>
					</td>
					<td class="table-content middle">
						<p>Válvulas Deslizantes.
							<br><a href="http://www.tapcoempro.com">www.tapcoempro.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/ultraflote.png') }}" alt="Ultraflote" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ULTRAFLOTE</span>
					</td>
					<td class="table-content middle">
						<p>
							Sábanas Flotantes. Ultradomos para Tanques.
							<br><a href="http://www.ultraﬂote.com">www.ultraﬂote.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/flexonics_senior.jpg') }}" alt="SENIOR FLEXONICS PATHWAY" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>SENIOR FLEXONICS PATHWAY</span>
					</td>
					<td class="table-content middle">
						<p>Juntas de Expansión para aplicaciones de alta temperatura.
							<br><a href="http://www.sfpathway.com">www.sfpathway.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/sofec.png') }}" alt="Sófec inc." class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>SOFEC INC.</span>
					</td>
					<td class="table-content middle">
						<p>
							Sistemas de Monoboyas para Naves de carga/descarga de hidrocarburos.
							<br><a href="http://www.sofec.com">www.sofec.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/catalytics.jpg') }}" alt="Christy Catalytics" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>CHRISTY CATALYTICS</span>
					</td>
					<td class="table-content middle">
						<p>Sistemas de transferencia de calor y refractarios para Reﬁnerías.
							<br><a href="http://www.christycatalytics.com">www.christycatalytics.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/bruno_schilling.png') }}" alt="Bruno Schillig S.A." class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>BRUNO SCHILLIG S.A.</span>
					</td>
					<td class="table-content middle">
						<p>
							Indicadores de Nivel, Interruptores de Nivel, Instrumentación para Plantas
							<br><a href="http://www.schillig.com.ar">www.schillig.com.ar</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/groth.jpg') }}" alt="Groth Corporation" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>GROTH CORPORATION</span>
					</td>
					<td class="table-content middle">
						<p>Arresta llamas y válvulas de presión vacío.
							<br><a href="http://www.grothcorp.com">www.grothcorp.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/a_dynamics.jpg') }}" alt="ABERDEEN DYNAMICS" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ABERDEEN DYNAMICS</span>
					</td>
					<td class="table-content middle">
						<p>
							Sistemas de actuación de válvulas. Unidades de Poder Hidráulico (HPU).
							<br><a href="http://www.aberdeendynamics.com">www.aberdeendynamics.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/crunch_oil.jpg') }}" alt="CRUNCH OIL" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>CRUNCH OIL</span>
					</td>
					<td class="table-content middle">
						<p>Sistema de absorción basado en material orgánico, para el control de derrames de gasolina, diésel, crudo y aceite. Presentaciones en polvo,ﬁbra, mantas, salchichas, booms, kits y unidades personalizadas.
							<br><a href="http://www.crunchoil.com">www.crunchoil.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/forum.png') }}" alt="ACADIANA OIL TOOLS FORUM" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ACADIANA OIL<br>TOOLS FORUM</span>
					</td>
					<td class="table-content middle">
						<p>
							Instrumentos de Perforación, Indicadores de Peso, Registradores de Perforación.
							<br><a href="http://www.forum-aoi.com">www.forum-aoi.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/forum.png') }}" alt="ACCCESS OIL TOOLS FORUM" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ACCCESS OIL<br>TOOLS FORUM</span>
					</td>
					<td class="table-content middle">
						<p>Herramientas de Perforación.
							<br><a href="http://www.accessoiltools.com">www.accessoiltools.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/bronco.png') }}" alt="BRONCO MANUFACTURING" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>BRONCO<br>MANUFACTURING</span>
					</td>
					<td class="table-content middle">
						<p>
							Repuestos y Componentes para equipos de perforación y Servicio de Pozos.
							<br><a href="http://www.broncomfg.com">www.broncomfg.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/eckel.jpg') }}" alt="ECKEL INTERNATIONAL" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ECKEL INTERNATIONAL</span>
					</td>
					<td class="table-content middle">
						<p>Tenazas Hidráulicas y sistemas de Potencia
							<br><a href="http://www.eckel.com">www.eckel.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/corpro.png') }}" alt="CORPRO" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>CORPRO</span>
					</td>
					<td class="table-content middle">
						<p>
							Herramientas, brocas y servicio de coreo.
							<br><a href="http://www.corpro-group.com">www.corpro-group.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/teledrift.jpg') }}" alt="TELEDRIFT INC." class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>TELEDRIFT INC.</span>
					</td>
					<td class="table-content middle">
						<p>Servicios de medición de desviación durante la perforación.
							<br><a href="http://www.teledrift.com">www.teledrift.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/wwt.png') }}" alt="WESTERN WELL TOOL" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>WESTERN WELL TOOL</span>
					</td>
					<td class="table-content middle">
						<p>
							Servicio de renta de Protectores para Casing y reductores de torque.
							<br><a href="http://www.wwtco.com">www.wwtco.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/tercel.jpg') }}" alt="TERCEL" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>TERCEL</span>
					</td>
					<td class="table-content middle">
						<p>Brocas de Perforación PDC y Tricónicas, Roller reamers, Swivel Master, Casing y Reaming shoes, centralizadores y estabilizadores.
							<br><a href="http://www.terceloilﬁeld.com">www.terceloilﬁeld.com</a></p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/premiere.png') }}" alt="PREMIERE " class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>PREMIERE </span>
					</td>
					<td class="table-content middle">
						<p>
							Anillos para aumento de torque en casing estándar, herramientas y servicio para corridas de casing. Running casing tool, power tongs, etc.
							<br><a href="http://www.premiereinc.com">www.premiereinc.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/tiw.png') }}" alt="TEXAS IRON WORKS" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>TEXAS IRON WORKS</span>
					</td>
					<td class="table-content middle">
						<p>Liner Hanger Systems. Expandable Systems. Completion Packers. Safety and Kelly Valves.</p>
						<p>Renta de herramientas (Flow Boss Surge Reduction System, CPT Casing Recovery System, CTO Casing Opening Tool, CRT Plug Manifold)
							<br><a href="http://www.terceloilﬁeld.com">www.terceloilﬁeld.com</a>
						</p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/ifa.png') }}" alt="LANCASTER FLOW AUTOMATION" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>LANCASTER FLOW AUTOMATION</span>
					</td>
					<td class="table-content middle">
						<p>
							Válvulas Choke.
							<br><a href="http://www.lancasterﬂow.com">www.lancasterﬂow.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/clampon.jpg') }}" alt="CLAMPON" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>CLAMPON</span>
					</td>
					<td class="table-content middle">
						<p>Monitores de partículas y arena producida en pozo.
							<br><a href="http://www.clampon.com">www.clampon.com</a>
						</p>
					</td>
				</tr>

				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>
				<tr class="xfa">
					<td class="middle"><img src="{{ asset('images/logos/energroup.png') }}" alt="ENERGROUP" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>ENERGROUP</span>
					</td>
					<td class="table-content middle">
						<p>
							Trampas de arena, Calentadores en línea, Separadores de 2 ó 3 fases, Separadores de ﬁltro, Separador BTEX, “Heater Treaters”.<br>
							Recuperación de vapores. “Flares” móviles y estacionarios.<br>
							Equipos para testeo de pozo. Manifold de estrangulación (choke).<br>
							Sistemas de compresión de gas y enfriadores.
							<br><a href="http://www.geecsales.com">www.geecsales.com</a>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3" class="no-padding">
						<div class="table-product-decorate"></div>
					</td>
				</tr>

				<tr>
					<td class="middle"><img src="{{ asset('images/logos/red_sgi.jpg') }}" alt="SGI" class="img-responsive"></td>
					<td class="middle hidden-xs">
						<span>SGI</span>
					</td>
					<td class="table-content middle">
						<p>Diseño y Fabricación de Sellos Mecánicos para todo tipo de ﬂuidos. Línea Industrial: Sellos compactos dobles, múltiple resorte. Línea Pesada: Sello compacto simple, mono resorte.
							<br><a href="http://s-gi.weebly.com/sa-sellos.html">s-gi.weebly.com/sa-sellos.html</a>
						</p>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
@endsection

@section('other-script')
<script src="{{ asset('js/slick/slick.min.js') }}"></script>
@endsection