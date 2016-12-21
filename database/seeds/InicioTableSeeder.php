<?php

use Illuminate\Database\Seeder;
use App\Page;

class InicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
	        	'page' => 'INICIO',
	        	'banner_inicio' => 'TRABAJAMOS PARA BRINDAR<br>UN SERVICIO DE CALIDAD.',
				'first_title' => 'SOMOS UNA COMPAÑÍA LÍDER',
				'second_title' => 'En el campo de instrumentación de plantas de Hidrocarburos y servicios de perforación con más de 43 años de experiencia.',
				'banner_title_img' => 'parallax1.jpg',
				'first_title2' => 'PRODUCTOS',
				'second_title2' => 'Nuestros productos pertenecen a las marcas más prestigiosas y reconocidas de la industria, por lo que se adaptan de manera optima a la solución que el cliente necesita.',
				'banner_title2_img' => 'parallax2.jpg',
				'first_title3' => 'SERVICIOS',
				'second_title3' => 'Nuestros 43 años de experiencia nos han permitido trabajar con las empresas más destacadas en los rubros de Petróleo, Gas, Energía y Minería. Nuestros servicios incluyen ingeniería, montaje, puesta en marcha, trabajos electrónicos, eléctricos y metalmecánicos que garantizan el óptimo funcionamiento de los equipos instalados, así como el apoyo técnico correspondiente.',
				'banner_title3_img' => 'parallax3.jpg'
			],

			[
				'page' => 'NOSOTROS',
	        	'banner_inicio' => '',
				'first_title' => '',
				'second_title' => 'Somos una compañía líder en el campo de instrumentación de plantas de Hidrocarburos y servicios de perforación, con más de 43 años de experiencia. Tenemos la representación de las más sólidas marcas del rubro, con técnicos y profesionales especializados en la instrumentación de equipos de precisión para la medición y control de flujo, supervisión de stock en tanques, control automatizado de válvulas, integración por software, calibración de contómetros, fabricación de tanques de aditivación y patrones volumétricos, entre otros servicios que su empresa necesita.Contamos con el servicio de alquiler de herramientas para perforación y representamos a una de las compañías más sólidas en el servicio de coring. Nuestros servicios incluyen trabajos electrónicos, eléctricos y metalmecánicos que garantizan el perfecto funcionamiento de los equipos instalados, así como del apoyo técnico correspondiente, comprometiéndonos con su completa satisfacción.',
				'banner_title_img' => 'nosotros.jpg',
				'first_title2' => 'VISIÓN',
				'second_title2' => '“CONVERTIRNOS EN EL PROVEEDOR PREFERIDO POR NUESTROS CLIENTES A NIVEL NACIONAL EN SERVICIOS Y PRODUCTOS ESPECIALIZADOS EN LA INDUSTRIA DE GAS, PETRÓLEO, ENERGÍA Y MINERÍA”.',
				'banner_title2_img' => '',
				'first_title3' => 'MISIÓN',
				'second_title3' => '“BRINDARLE A NUESTROS CLIENTES SERVICIOS, EQUIPAMIENTO MECÁNICO E INSTRUMENTACIÓN DE PRIMERA CALIDAD EN LA INDUSTRIA DE GAS, PETRÓLEO, ENERGÍA Y MINERÍA, PROPORCIONÁNDOLES LA MEJOR SOLUCIÓN TÉCNICA”.',
				'banner_title3_img' => ''
			],

			[
				'page' => 'CLIENTES',
	        	'banner_inicio' => '',
				'first_title' => 'Nuestros clientes se encuentran entre las empresas líderes en el mercado.',
				'second_title' => '',
				'banner_title_img' => '',
				'first_title2' => '',
				'second_title2' => '',
				'banner_title2_img' => '',
				'first_title3' => '',
				'second_title3' => "['Llave en mano para la instalación de sistemas para medición de flujo de hidrocarburos; incluyendo controladores de flujo, medidores de flujo, válvulas de control, etc.','Sistemas para la medición de nivel de tanques de hidrocarburos, incluyendo medidores de nivel y sistemas automáticos de supervisión.','Intervención de ductos en caliente (Hot Tapping y Plugging)','Suministro y puesta en marcha de sistemas de control de inyección de químicos para concentrados en operaciones mineras.']",
				'banner_title3_img' => ''
			],

			[
				'page' => 'SERVICIOS',
	        	'banner_inicio' => '',
				'first_title' => '',
				'second_title' => '["Llave en mano para la instalación de sistemas para medición de flujo de hidrocarburos; incluyendo controladores de flujo, medidores de flujo, válvulas de control, etc.","Sistemas para la medición de nivel de tanques de hidrocarburos, incluyendo medidores de nivel y sistemas automáticos de supervisión.","Intervención de ductos en caliente (Hot Tapping y Plugging)","Suministro y puesta en marcha de sistemas de control de inyección de químicos para concentrados en operaciones mineras."]',
				'banner_title_img' => '',
				'first_title2' => '',
				'second_title2' => '',
				'banner_title2_img' => '',
				'first_title3' => '',
				'second_title3' => '',
				'banner_title3_img' => ''
			],

			[
				'page' => 'CONTACTO',
	        	'banner_inicio' => '',
				'first_title' => '',
				'second_title' => 'Av. San Borja Norte 1263<br>Lima - 41 Perú',
				'banner_title_img' => '',
				'first_title2' => '',
				'second_title2' => '',
				'banner_title2_img' => '',
				'first_title3' => '',
				'second_title3' => '',
				'banner_title3_img' => ''
			]
        ];

        foreach ($data as $key) {
        	Page::create($key);
        }
    }
}
