<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Paciente extends Model
{
    protected $fillable=[
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido', 
        'segundo_apellido', 
        'documento',
        'tipo_documento',
        'celular', 
        'direccion', 
        'semanas_embarazo',
        'fecha_nacimiento',
        'control',
        'seguimiento',
        'edad',
        
    ];

    

    //RELACIONES
    
    public function controles()
    {
        return $this->belongsToMany('App\Control');
    }

    public function citas()
    {
        return $this->belongsToMany('App\Cita');
    }

    //METODOS
    public function seguimiento()
    {
        return $this->seguimiento == 1 ? 'Primera vez' : 'control';
    }

    public function paqueteActual($cantidad_cita = null,$paciente = null)
    {
        if ($cantidad_cita==null && $paciente == null) {
            $controlActual= optional($this->controlActual())->load('paquetes');
        }else{
            $controlActual= optional($this->controlActual($cantidad_cita, $paciente))->load('paquetes');
        }
        
        
        $paquete_actual = $this->buscarPaquete($controlActual);

        return optional($paquete_actual)->nombre;
        
    }

    public function paqueteSiguiente()
    {
        $controlSiguiente= optional($this->controlSiguiente())->load('paquetes');
        
        $paquete_siguiente = $this->buscarPaquete($controlSiguiente);

        return \optional($paquete_siguiente)->nombre;
        
    }

    public function buscarPaquete($control)
    {
        $semanas_embarazo = $this->semanas_embarazo;
        $paquetes = \null;
        $con_control= $this->control;
        if ($control!=null) {
            foreach ($control->paquetes as $paquete) {
                $paquete_de_control = $paquete->con_control;
                $de_hasta = explode(';',$paquete->pivot->rango_semana_embarazo);
                $rango_menor = floatval($de_hasta[0]);
                $rango_mayor = floatval($de_hasta[1]);
                if (($semanas_embarazo >= $rango_menor && $semanas_embarazo <= $rango_mayor) && $con_control==$paquete_de_control  ) {
                    $paquetes = $paquete;
                    break;
                }
            }
        }
        
       
        
        return $paquetes;
    }

    public function controlActual($cantidad_cita = null,$paciente = null )
    {
        
        if ($cantidad_cita==null && $paciente == null) {
            
            $paciente = Paciente::find($this->id);
            $cantidad_cita = $paciente->citas->last()->cantidad_cita;
        }

        $cantidad_controles = \sizeof($paciente->controles);
        if ($cantidad_cita < $cantidad_controles) {
            $control = $paciente->controles[$cantidad_cita];
            
        }else{
            $control = "NO HAY MAS CITAS";
        }        
        return $control;
    }

    public function controlSiguiente()
    {
        $paciente = Paciente::find($this->id);
        
        $ultima_cita = $paciente->citas->last();
        $cantidad_cita = $paciente->citas->last()->cantidad_cita + 1;
        $cantidad_controles = \sizeof($paciente->controles);
        
        if ($cantidad_cita < $cantidad_controles) {
            $controles = $paciente->controles[($cantidad_cita)];
        }else{
            $controles = "NO HAY MAS CITAS";
        }        
        return $controles;
        
    }

    public function fechaInicio()
    {
        $paciente = Paciente::find($this->id);
        return Carbon::parse($paciente->citas()->first()->fecha_inicio)->format('d-m-Y');
    }
    public function fechaControl()
    {
        $paciente = Paciente::find($this->id);
        return Carbon::parse($paciente->citas->last()->fecha_control)->format('d-m-Y');
    
    }
    public function fechaProxima()
    {
        $paciente = Paciente::find($this->id);

        return Carbon::parse($paciente->citas->last()->fecha_proxima)->format('d-m-Y');
    
    }

    



}
