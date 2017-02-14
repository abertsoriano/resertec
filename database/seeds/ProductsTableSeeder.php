<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
            // Tabla
            [
                'logo_img' => 'fmc.png',
                'name' => 'FMC MEASUREMENT SOLUTIONS - SMITH METER',
                'flag' => 'T',
                'desc' => '<p>Medidores de Desplazamiento Positivo, Turbina, Másicos, Ultrasonido y Placas de Oriﬁcio. Controladores de Carga Accuload, Válvulas de Control. Computadoras de Flujo<br>
							<a href="#">www.fmctechnologies.com/MeasurementSolutions</a></p>
						<p>“Oil in Water” analizadores y monitores; micro válvulas, válvulas de control, de contrapresión, de descarga; interruptores de presión.
							<br>
							<a href="#">www.fmctechnologies.com/en/FluidControl/Technologies/Invalco.aspx</a>
						</p>'
            ],
            [
                'logo_img' => 'twd.jpg',
                'name' => 'TD WILLIAMSON',
                'flag' => 'T',
                'desc' => '<p>Raspatubos (pigs), máquinas para reparación y mantenimiento de tuberías bajo presión (Hot Tap &amp; Plugging). Sistemas para Lanzamiento y Recepción de Raspatubos y Esferas.</p>
						<p><a href="#">www.tdwilliamson.com</a></p>'
            ],
            [
                'logo_img' => 'honeywell.png',
                'name' => 'HONEYWELL ENRAF, TERMINAL AUTOMATION, FLUID TECHNOLOGY',
                'flag' => 'T',
                'desc' => '<p>Medidores de Nivel tipo Servo y Radar. Sistemas para Supervisión de Volumen en Patios de Tanques.
							<br><a href="http://www.enraf.com">www.enraf.com</a></p>
						    <p>Sistemas y accesorios para Inyección de Aditivos y Sistemas de mezcla.(Blending)
							<br><a href="http://www.enraf.com">www.enraf.com</a></p>'
            ],
            [
                'logo_img' => 'plidco.jpg',
                'name' => 'PLIDCO',
                'flag' => 'T',
                'desc' => '<p>Grampas para reparación de tuberías bajo presión.</p>
						<p><a href="http://www.plidco.com">www.plidco.com</a></p>'
            ],
            [
                'logo_img' => 'redlands.png',
                'name' => 'REDLANDS',
                'flag' => 'T',
                'desc' => '<p>
							Brazos de Carga para Terminales y Plantas de Venta. Uniones Giratorias.
							<br><a href="http://www.redlands.com.br">www.redlands.com.br</a>
						</p>'
            ],
            [
                'logo_img' => 'scully.png',
                'name' => 'SCULLY SIGNAL CO.',
                'flag' => 'T',
                'desc' => '<p>Sistemas de Protección, Sobrellenado y Puesta a Tierra.
							<br><a href="http://www.scully.com">www.scully.com</a></p>'
            ],
            [
                'logo_img' => 'akerSolutions.jpg',
                'name' => 'AKER SOLUTIONS – Woodﬁeld Systems Limited',
                'flag' => 'T',
                'desc' => '<p>
							Brazos de Carga Marinos.
							<br><a href="http://www.akersolutions.com">www.akersolutions.com</a>
						</p>'
            ],
            [
                'logo_img' => 'tapcoenpro.jpg',
                'name' => 'TAPCO EMPRO',
                'flag' => 'T',
                'desc' => '<p>Válvulas Deslizantes.
							<br><a href="http://www.tapcoempro.com">www.tapcoempro.com</a></p>'
            ],
            [
                'logo_img' => 'ultraflote.png',
                'name' => 'ULTRAFLOTE',
                'flag' => 'T',
                'desc' => '<p>
							Sábanas Flotantes. Ultradomos para Tanques.
							<br><a href="http://www.ultraﬂote.com">www.ultraﬂote.com</a></p>'
            ],
            [
                'logo_img' => 'flexonics_senior.jpg',
                'name' => 'SENIOR FLEXONICS PATHWAY',
                'flag' => 'T',
                'desc' => '<p>Juntas de Expansión para aplicaciones de alta temperatura.
							<br><a href="http://www.sfpathway.com">www.sfpathway.com</a></p>'
            ],
            [
                'logo_img' => 'sofec.png',
                'name' => 'SOFEC INC.',
                'flag' => 'T',
                'desc' => '<p>
							Sistemas de Monoboyas para Naves de carga/descarga de hidrocarburos.
							<br><a href="http://www.sofec.com">www.sofec.com</a></p>'
            ],
            [
                'logo_img' => 'catalytics.jpg',
                'name' => 'CHRISTY CATALYTICS',
                'flag' => 'T',
                'desc' => '<p>Sistemas de transferencia de calor y refractarios para Reﬁnerías.
							<br><a href="http://www.christycatalytics.com">www.christycatalytics.com</a></p>'
            ],
            [
                'logo_img' => 'bruno_schilling.png',
                'name' => 'BRUNO SCHILLIG S.A.',
                'flag' => 'T',
                'desc' => '<p>
							Indicadores de Nivel, Interruptores de Nivel, Instrumentación para Plantas
							<br><a href="http://www.schillig.com.ar">www.schillig.com.ar</a></p>'
            ],
            [
                'logo_img' => 'groth.jpg',
                'name' => 'GROTH CORPORATION',
                'flag' => 'T',
                'desc' => '<p>Arresta llamas y válvulas de presión vacío.
							<br><a href="http://www.grothcorp.com">www.grothcorp.com</a></p>'
            ],
            [
                'logo_img' => 'a_dynamics.jpg',
                'name' => 'ABERDEEN DYNAMICS',
                'flag' => 'T',
                'desc' => '<p>
							Sistemas de actuación de válvulas. Unidades de Poder Hidráulico (HPU).
							<br><a href="http://www.aberdeendynamics.com">www.aberdeendynamics.com</a></p>'
            ],
            [
                'logo_img' => 'crunch_oil.jpg',
                'name' => 'CRUNCH OIL',
                'flag' => 'T',
                'desc' => '<p>Sistema de absorción basado en material orgánico, para el control de derrames de gasolina, diésel, crudo y aceite. Presentaciones en polvo,ﬁbra, mantas, salchichas, booms, kits y unidades personalizadas.
							<br><a href="http://www.crunchoil.com">www.crunchoil.com</a></p>'
            ],
            [
                'logo_img' => 'forum.png',
                'name' => 'ACADIANA OIL TOOLS FORUM',
                'flag' => 'T',
                'desc' => '<p>
							Instrumentos de Perforación, Indicadores de Peso, Registradores de Perforación.
							<br><a href="http://www.forum-aoi.com">www.forum-aoi.com</a></p>'
            ],
            [
                'logo_img' => 'forum.png',
                'name' => 'ACCCESS OIL TOOLS FORUM',
                'flag' => 'T',
                'desc' => '<p>Herramientas de Perforación.
							<br><a href="http://www.accessoiltools.com">www.accessoiltools.com</a></p>'
            ],
            [
                'logo_img' => 'bronco.png',
                'name' => 'BRONCO MANUFACTURING',
                'flag' => 'T',
                'desc' => '<p>
							Repuestos y Componentes para equipos de perforación y Servicio de Pozos.
							<br><a href="http://www.broncomfg.com">www.broncomfg.com</a></p>'
            ],
            [
                'logo_img' => 'eckel.jpg',
                'name' => 'ECKEL INTERNATIONAL',
                'flag' => 'T',
                'desc' => '<p>Tenazas Hidráulicas y sistemas de Potencia
							<br><a href="http://www.eckel.com">www.eckel.com</a></p>'
            ],
            [
                'logo_img' => 'corpro.png',
                'name' => 'CORPRO',
                'flag' => 'T',
                'desc' => '<p>
							Herramientas, brocas y servicio de coreo.
							<br><a href="http://www.corpro-group.com">www.corpro-group.com</a></p>'
            ],
            [
                'logo_img' => 'teledrift.jpg',
                'name' => 'TELEDRIFT INC.',
                'flag' => 'T',
                'desc' => '<p>Servicios de medición de desviación durante la perforación.
							<br><a href="http://www.teledrift.com">www.teledrift.com</a></p>'
            ],
            [
                'logo_img' => 'wwt.png',
                'name' => 'WESTERN WELL TOOL',
                'flag' => 'T',
                'desc' => '<p>
							Servicio de renta de Protectores para Casing y reductores de torque.
							<br><a href="http://www.wwtco.com">www.wwtco.com</a></p>'
            ],
            [
                'logo_img' => 'tercel.jpg',
                'name' => 'TERCEL',
                'flag' => 'T',
                'desc' => '<p>Brocas de Perforación PDC y Tricónicas, Roller reamers, Swivel Master, Casing y Reaming shoes, centralizadores y estabilizadores.
							<br><a href="http://www.terceloilﬁeld.com">www.terceloilﬁeld.com</a></p>'
            ],
            [
                'logo_img' => 'premiere.png',
                'name' => 'PREMIERE',
                'flag' => 'T',
                'desc' => '<p>
							Anillos para aumento de torque en casing estándar, herramientas y servicio para corridas de casing. Running casing tool, power tongs, etc.
							<br><a href="http://www.premiereinc.com">www.premiereinc.com</a></p>'
            ],
            [
                'logo_img' => 'tiw.png',
                'name' => 'TEXAS IRON WORKS',
                'flag' => 'T',
                'desc' => '<p>Liner Hanger Systems. Expandable Systems. Completion Packers. Safety and Kelly Valves.</p><p>Renta de herramientas (Flow Boss Surge Reduction System, CPT Casing Recovery System, CTO Casing Opening Tool, CRT Plug Manifold)
							<br><a href="http://www.terceloilﬁeld.com">www.terceloilﬁeld.com</a></p>'
            ],
            [
                'logo_img' => 'ifa.png',
                'name' => 'LANCASTER FLOW AUTOMATION',
                'flag' => 'T',
                'desc' => '<p>Válvulas Choke.<br><a href="http://www.lancasterﬂow.com">www.lancasterﬂow.com</a></p>'
            ],
            [
                'logo_img' => 'clampon.jpg',
                'name' => 'CLAMPON',
                'flag' => 'T',
                'desc' => '<p>Monitores de partículas y arena producida en pozo.
							<br><a href="http://www.clampon.com">www.clampon.com</a></p>'
            ],
            [
                'logo_img' => 'energroup.png',
                'name' => 'ENERGROUP',
                'flag' => 'T',
                'desc' => '<p>
							Trampas de arena, Calentadores en línea, Separadores de 2 ó 3 fases, Separadores de ﬁltro, Separador BTEX, “Heater Treaters”.<br>
							Recuperación de vapores. “Flares” móviles y estacionarios.<br>
							Equipos para testeo de pozo. Manifold de estrangulación (choke).<br>
							Sistemas de compresión de gas y enfriadores.
							<br><a href="http://www.geecsales.com">www.geecsales.com</a></p>'
            ],
            [
                'logo_img' => 'red_sgi.jpg',
                'name' => 'SGI',
                'flag' => 'T',
                'desc' => '<p>Diseño y Fabricación de Sellos Mecánicos para todo tipo de ﬂuidos. Línea Industrial: Sellos compactos dobles, múltiple resorte. Línea Pesada: Sello compacto simple, mono resorte.
							<br><a href="http://s-gi.weebly.com/sa-sellos.html">s-gi.weebly.com/sa-sellos.html</a></p>'
            ],


            // Sliders
            [
                'logo_img' => 'a_dynamics.jpg',
                'flag' => 'S',
                'name' => 'Dynamics',
                'desc' => 'http://www.aberdeendynamics.com'
            ],
            [
                'logo_img' => 'akerSolutions.jpg',
                'flag' => 'S',
                'name' => 'Aker Solutions',
                'desc' => 'http://www.akersolutions.com'
            ],
            [
                'logo_img' => 'bronco.jpg',
                'flag' => 'S',
                'name' => 'Bronco',
                'desc' => 'http://www.broncomfg.com'
            ],
            [
                'logo_img' => 'bruno_schillig.jpg',
                'flag' => 'S',
                'name' => 'Bruno Schillig',
                'desc' => 'http://www.schillig.com.ar'
            ],
            [
                'logo_img' => 'catalytics.jpg',
                'flag' => 'S',
                'name' => 'Catalytics',
                'desc' => 'http://www.christycatalytics.com'
            ],
            [
                'logo_img' => 'clampon.jpg',
                'flag' => 'S',
                'name' => 'Clampon',
                'desc' => 'http://www.clampon.com'
            ],
            [
                'logo_img' => 'corpro.jpg',
                'flag' => 'S',
                'name' => 'Corpro',
                'desc' => 'http://www.corpro-group.com'
            ],
            [
                'logo_img' => 'crunch_oil.jpg',
                'flag' => 'S',
                'name' => 'Crunch Oil',
                'desc' => 'http://www.crunchoil.com'
            ],
            [
                'logo_img' => 'eckel.jpg',
                'flag' => 'S',
                'name' => 'Eckel',
                'desc' => 'http://www.eckel.com'
            ],
            [
                'logo_img' => 'energroup.jpg',
                'flag' => 'S',
                'name' => 'Energroup',
                'desc' => 'http://www.geecsales.com'
            ],
            [
                'logo_img' => 'flexonics.jpg',
                'flag' => 'S',
                'name' => 'Flexonics',
                'desc' => 'http://www.sfpathway.com'
            ],
            [
                'logo_img' => 'forum.jpg',
                'flag' => 'S',
                'name' => 'Forum',
                'desc' => 'http://www.forum-aoi.com'
            ],
            [
                'logo_img' => 'groth.jpg',
                'flag' => 'S',
                'name' => 'Groth',
                'desc' => 'http://www.grothcorp.com'
            ],
            [
                'logo_img' => 'honeywell.jpg',
                'flag' => 'S',
                'name' => 'Honeywell',
                'desc' => 'http://www.enraf.com'
            ],
            [
                'logo_img' => 'ifa_company.jpg',
                'flag' => 'S',
                'name' => 'Ifa Company',
                'desc' => 'http://www.lancasterflow.com',
            ],
            [
                'logo_img' => 'plidco.jpg',
                'flag' => 'S',
                'name' => 'Plidco',
                'desc' => 'http://www.plidco.com'
            ],
            [
                'logo_img' => 'red_sgi.jpg',
                'flag' => 'S',
                'name' => 'Red Sgi',
                'desc' => 'http://gi.weebly.com'
            ],
            [
                'logo_img' => 'scully.jpg',
                'flag' => 'S',
                'name' => 'Scully',
                'desc' => 'http://www.scully.com'
            ],
            [
                'logo_img' => 'sofec.jpg',
                'flag' => 'S',
                'name' => 'Sofec',
                'desc' => 'http://www.sofec.com'
            ],
            [
                'logo_img' => 'tapcoenpro.jpg',
                'flag' => 'S',
                'name' => 'Tapcoenpro',
                'desc' => 'http://www.tapcoempro.com'
            ],
            [
                'logo_img' => 'teledrift.jpg',
                'flag' => 'S',
                'name' => 'Teledrift',
                'desc' => 'http://www.teledrift.com'
            ],
            [
                'logo_img' => 'tercel.jpg',
                'flag' => 'S',
                'name' => 'Tercel',
                'desc' => 'http://www.terceloilfield.com'
            ],
            [
                'logo_img' => 'twd.jpg',
                'flag' => 'S',
                'name' => 'Twd',
                'desc' => 'http://www.tdwilliamson.com'
            ],
            [
                'logo_img' => 'ultraflote.jpg',
                'flag' => 'S',
                'name' => 'Ultraflote',
                'desc' => 'http://www.ultraflote.com'
            ],
            [
                'logo_img' => 'western.jpg',
                'flag' => 'S',
                'name' => 'Western',
                'desc' => 'http://www.wwtco.com'
            ]
        ];

        foreach ($array as $item) {
            Product::create($item);
        }
    }
}
