<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paquete;
use Faker\Generator as Faker;

$factory->define(Paquete::class, function (Faker $faker) {
    

    return [
        'nombre' => 'PAQUETE ',
        'descripcion'
    ];
});
