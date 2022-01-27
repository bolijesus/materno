<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'nombre', 'descripcion', 'con_control'
    ];

    //MIS METODOS
    public function hasControl($tiene_control)
    {
        
            if ($this->con_control == $tiene_control) {
                return \true;
            }
        
        return false;
    }
    //RELACIONES

    public function cups()
    {
        return $this->belongsToMany('App\Cup');
    }

    public function controles()
    {
        return $this->belongsToMany('App\Control')->withPivot('control_id','rango_semana_embarazo');
    }

    
}
