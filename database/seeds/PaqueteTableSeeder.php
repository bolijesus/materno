<?php

use App\Paquete;
use Illuminate\Database\Seeder;

class PaqueteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 38; $i++) { 
            $paquete = Paquete::create([
                'nombre' => 'PAQUETE '. $i,
                'descripcion' => 'DESCRIPCION PAQUETE '.$i,
                'con_control' => '1'
            ]);
        }

        for ($i=38; $i < 90; $i++) { 

            $paquete = Paquete::create([
                'nombre' => 'PAQUETE '. $i,
                'descripcion' => 'DESCRIPCION PAQUETE '.$i,
                'con_control' => '0'
            ]);
        }
        
        
    }
}
