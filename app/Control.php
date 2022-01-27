<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Control extends Model
{
    protected $fillable = [
        'nombre', 'descripcion'
    ];

    //METODOS
    public function hasPaquete(Paquete $paquete)
    {
        foreach ($this->paquetes as $paquete_class) {
            if ($paquete_class->id == $paquete->id) {
                return \true;
            }
        }
        return false;
    }
    

    //RELACIONES
    public function pacientes()
    {
        return $this->belongsToMany('App\Paciente');
    }

    public function paquetes()
    {
        return $this->belongsToMany('App\Paquete')->withPivot('paquete_id','rango_semana_embarazo');
    }

}
