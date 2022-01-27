<?php

use App\Control;
use Illuminate\Database\Seeder;

class ControlTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $control = Control::create([
            'nombre' => 'INGRESO',
            'descripcion' => 'DESCRIPCION INGRESO'
        ]);

        for ($i=1; $i < 11; $i++) { 
            $control = Control::create([
                'nombre' => 'CONTROL '. $i,
                'descripcion' => 'DESCRIPCION CONTROL '.$i
            ]);
        }
        $control = Control::create([
            'nombre' => 'PURPERIO',
            'descripcion' => 'DESCRIPCION PURPERIO'
        ]);
    }
}
