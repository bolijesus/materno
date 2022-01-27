<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cup extends Model
{
    protected $fillable = [
        "codigo", "descripcion", "paquete_id"
    ];

    public function paquetes()
    {
        return $this->belongsToMany('App\Paquete');
    }
    public function hasPaquete(Paquete $paquete)
    {
        foreach ($this->paquetes as $paquete_class) {
            if ($paquete_class->id == $paquete->id) {
                return \true;
            }
        }
        return false;
    }
}
