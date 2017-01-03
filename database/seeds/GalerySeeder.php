<?php

use Illuminate\Database\Seeder;
use App\Galery;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = [
        	['imagen' => 'Honeywell_Enraf_Terminal_Automation.JPG'],
        	['imagen' => 'Extra_02.jpg'],
        	['imagen' => 'Aberdeen.jpg'],
        	['imagen' => 'CrunchOil.jpg'],
        	['imagen' => 'Eckel.png'],
        	['imagen' => 'Extra_01.jpg'],
        	['imagen' => 'FMC_Measurement_Solutions.jpg'],
        	['imagen' => 'Forum.jpg'],
        	['imagen' => 'Groth.jpg'],
        	['imagen' => 'scully.png'],
        	['imagen' => 'Honeywell_Enraf_Fluid_Technology.png'],
        	['imagen' => 'Plidco.png'],
        	['imagen' => 'schillig.png'],
        	['imagen' => 'sgi.jpg'],
        	['imagen' => 'tdw.jpg'],
        	['imagen' => 'wems.jpg'],
        	['imagen' => 'wwt.jpg']
        ];

        foreach ($array as $key) {
        	Galery::create($key);
        }
    }
}
