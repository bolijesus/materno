<?php

namespace App\Http\Middleware;

use App\Cita;
use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\DB;

class CheckMonthCite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $paciente = $request->paciente;
        $fecha_ultima_cita = Carbon::parse($paciente->citas->last()->fecha_proxima);
        $fecha_actual = Carbon::now('America/Bogota');

        if ($fecha_ultima_cita->month < $fecha_actual->month) {
           $this->citaNoAsistida($request->paciente->load(['citas','controles']));
        }
        return $next($request);
    }

    public function citaNoAsistida($paciente)
    {
        $response = \collect();
        try {
            DB::transaction(function () use ($paciente, $response)
            {   
                
                $cantidad_cita = ($paciente->citas->last()->cantidad_cita + 1);
                $control_proximo = ($paciente->citas->last()->control_proximo + 1);
                $fecha_proxima = Carbon::parse($paciente->citas->last()->fecha_proxima)->addMonth();
                $paciente->update([
                    'seguimiento' => false,
                ]);
                $cita = Cita::create([
                    'estado' => false,
                    'fecha_inicio'=>Carbon::parse($paciente->citas->last()->fecha_inicio),
                    'fecha_control'=>Carbon::parse($paciente->citas->last()->fecha_proxima),
                    'fecha_proxima'=>Carbon::parse($fecha_proxima),
                    'control_actual'=>$paciente->citas->last()->control_proximo,
                    'control_proximo'=>$control_proximo, 
                    'cantidad_cita'=>$cantidad_cita, 
                ]);
                $paciente->citas()->attach($cita->id);
                
                $response->push(true);
            
            });

        } catch (Exception $th) {
            $response->push($th->getMessage());            
        }

        return $response;
    }
}
