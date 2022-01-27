<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paquete;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $controles = Control::all();
        return \view('models.control.index', \compact('controles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetes = Paquete::all();
        return \view('models.control.create',['control'=>new Control(),'paquetes'=>$paquetes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::transaction(function () use ($request)
            {
                $request->nombre = strtoupper($request->nombre);
                $request->descripcion = strtoupper($request->descripcion);
        
                $control = Control::create([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                    
                ]);
                $control->paquetes()->sync($request->paquetes); 
            });

        } catch (\Throwable $th) {
            \dd($th);
        }
        return \redirect()->route('backoffice.control.index')->with('alert', \swal("
            'Se creo un nuevo CONTROL!',
            'El CONTROL fue creado satisfactoriamente',
            'success'
        "));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function show(Control $control)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function edit(Control $control)
    {
        $paquetes = Paquete::all();
        return \view('models.control.edit',\compact(['control', 'paquetes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Control $control)
    {
        $request->nombre = strtoupper($request->nombre);
        $request->descripcion = strtoupper($request->descripcion);

        $control->update([
                    'nombre' => $request->nombre,
                    'descripcion' => $request->descripcion,
                ]);
        $control->paquetes()->sync($request->paquetes);

        return \redirect()->route('backoffice.control.index')->with('alert',swal("
        'Se Actualizo el PAQUETE!',
        'El PAQUETE fue actualizado satisfactoriamente',
        'success'
    "));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function destroy(Control $control)
    {
        $paquetes=\collect();
         
        foreach ($control->paquetes as $paquete) {
            $paquetes->push($paquete->id);
        }

        if (\request()->ajax()) {
            try {
                $control->paquetes()->detach($paquetes);
                $control->delete();
                return \json_encode(\true);
            } catch (\Throwable $th) {
                return \json_encode(false);
            }
        }
    }

    //MIS METODOS [STORE,INDEX,VIEWS] A OTRAS PAGINAS
    

    //MIS METODOS
    public function viewRangoFecha(Control $control)
    {
        return \view('models.control.rango_fechas',\compact('control'));
    }
    public function storeRangoFecha(Request $request)
    {
        $control = Control::find($request->id_control);

        foreach ($control->paquetes as $index => $paquete) {
            $control->paquetes()->updateExistingPivot($paquete->id,['rango_semana_embarazo' => $request->rango_semana_embarazo[$index] ]);
        }

        return \redirect()->route('backoffice.control.index')->with('alert', \swal("
            'Se asignaron las fechas al control!',
            'Las FECHAS fueron asignadas satisfactoriamente',
            'success'
        "));
    }
    
    public function allControl(Request $request)
    {
        if($request->ajax()){
            $con_control = \floatval($request->con_control);
            $controles = $this->asignar_controles(floatval($request->semanas_embarazo));
            
            return $controles;
        }
    }

    public function asignar_controles($semanas_embarazo)
    {
        return $this->control($semanas_embarazo);
        
    }
    public function control($semanas_embarazo)
    {
        if ($semanas_embarazo >= 5 && $semanas_embarazo <=9) {
            return $this->buscarControles(12);
        }elseif($semanas_embarazo >= 9.1 && $semanas_embarazo <=13.1){
            return $this->buscarControles(10);
        }elseif($semanas_embarazo >= 13.2 && $semanas_embarazo <=13.6){
            return $this->buscarControles(9);
        }elseif($semanas_embarazo >= 13.7 && $semanas_embarazo <=17.2){
            return $this->buscarControles(9);
        }elseif($semanas_embarazo >= 17.3 && $semanas_embarazo <=21){
            return $this->buscarControles(8);
        }elseif($semanas_embarazo >= 21.1 && $semanas_embarazo <=23.5){
            return $this->buscarControles(6);
        }elseif($semanas_embarazo >= 23.6 && $semanas_embarazo <=25){
            return $this->buscarControles(6);
        }elseif($semanas_embarazo >= 25.1 && $semanas_embarazo <=29.1){
            return $this->buscarControles(6);
        }elseif($semanas_embarazo >= 29.2 && $semanas_embarazo <=33){
            return $this->buscarControles(5);
        }elseif($semanas_embarazo >= 33.1){
            return $this->buscarControles(4);
        }else{
            return \json_encode('No hay controles con estas semanas de embarazo');
        }
    }

    public function buscarControles($numero_de_controles_a_realizar)
    {
        $controles = collect();
        for ($i=0; $i <= $numero_de_controles_a_realizar ; $i++) { 
            $controles->push($i);
        }

        $controles = Control::find($controles);
        
        return $controles->toJson();
    }

}
