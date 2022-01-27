<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'estado',
        'fecha_inicio',
        'fecha_control',
        'fecha_proxima',
        'control_actual',
        'control_proximo',
        'cantidad_cita',
    ];

    //RELACIONES
    public function pacientes()
    {
        return $this->belongsToMany('App\Paciente');
    }
}
