<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Control;
use App\Exports\PacientesExport;
use App\Http\Requests\Paciente\StoreRequest;
use App\Http\Requests\Paciente\UpdateRequest;
use App\Paciente;
use App\Paquete;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkCite', ['only' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return \view('models.paciente.index', \compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $controles = Control::all();
        $paquetes = Paquete::all();
        return \view('models.paciente.create',\compact('controles','paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $cita_ingreso = $this->citaIngreso($request);
        
        if ($cita_ingreso[0]) {
            return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'Se creo un nuevo PACIENTE!',
                'El PACIENTE fue creado satisfactoriamente',
                'success'
            "));
        }else{
            return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'No se pudo crear el paciente PACIENTE!',
                'Intente de nuevo. Error:'".$cita_ingreso.",
                'error'
            "));
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        \redirect()->route('backoffice.paciente.show',$paciente);
        return \view('models.paciente.show', \compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return \view('models.paciente.edit', \compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Paciente $paciente)
    {
        $paciente->update([
            'primer_nombre' => $request->primer_nombre,
            'segundo_nombre' => $request->segundo_nombre,
            'primer_apellido' => $request->primer_apellido, 
            'segundo_apellido' => $request->segundo_apellido, 
            'documento' => $request->documento,
            'tipo_documento' => $request->tipo_documento,
            'celular' => $request->celular, 
            'direccion' => $request->direccion, 
            'edad' => $request->edad,
            'fecha_nacimiento' => Carbon::parse($request->fecha_nacimiento)
        ]);
        return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'El Paciente fue actualizado!',
                'EXITO AL ACTUALIZAR ',
                'success'
            "));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'El paciente Se elimino correctamente!',
                ':D',
                'success'
            "));
    }

    //MIS METODOS [STORE,INDEX,VIEWS] A OTRAS PAGINAS
    public function asistenciaStore(Request $request, Paciente $paciente)
    {
        $response = \collect();
        try {
            DB::transaction(function () use ($paciente, $response, $request)
            {   
                
                $cantidad_cita = ($paciente->citas->last()->cantidad_cita + 1);
                $control_proximo = ($paciente->citas->last()->control_proximo + 1);
                $fecha_proxima = Carbon::parse($paciente->citas->last()->fecha_proxima)->addMonth();
                $paciente->update([
                    'seguimiento' => false,
                ]);
                $cita = Cita::create([
                    'estado' => true,
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

        if ($response[0]) {
            return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'El paciente asistio a la cita!',
                ':D',
                'success'
            "));
        }

        return \redirect()->route('backoffice.paciente.index')->with('alert', \swal("
                'No se registro la cita',
                'Por favor INTENTE NUEVAMENTE',
                'error'
            "));
    }

    //MIS METODOS
    
    public function citaIngreso(Request $request)
    {
        $response = \collect();
        try {
            DB::transaction(function () use ($request, $response)
            {   
                
                $cantidad_cita = (Control::find($request->control)->id)-1;
                $control_siguiente = intval($request->control)+1;

                $paciente = Paciente::create([
                    'primer_nombre' => $request->primer_nombre,
                    'segundo_nombre' => $request->segundo_nombre,
                    'primer_apellido' => $request->primer_apellido, 
                    'segundo_apellido' => $request->segundo_apellido, 
                    'documento' => $request->documento,
                    'tipo_documento' => $request->tipo_documento,
                    'celular' => $request->celular, 
                    'direccion' => $request->direccion, 
                    'semanas_embarazo' => $request->semanas_embarazo,
                    'edad' => $request->edad,
                    'fecha_nacimiento' => Carbon::parse($request->fecha_nacimiento),
                    'control' => $request->tiene_control == 1 ? true :false,
                    'seguimiento' => $request->seguimiento == 1 ? true :false,
                ]);
                $cita = Cita::create([
                    'estado' => true,
                    'fecha_inicio'=>Carbon::parse($request->fecha_ingreso),
                    'fecha_control'=>Carbon::parse($request->fecha_ingreso),
                    'fecha_proxima'=>Carbon::parse($request->fecha_proxima),
                    'control_actual'=>$request->control,//INGRESO
                    'control_proximo'=>$control_siguiente,//CONTROL 1
                    'cantidad_cita'=>$cantidad_cita,//CONTROL 1
                ]);
                $paciente->citas()->attach($cita->id);
                $paciente->controles()->sync($this->AsignarControles($request->semanas_embarazo));
                
                $response->push(true);
            
            });

        } catch (Exception $th) {
            $response->push($th->getMessage());            
        }

        return $response;
    }

    public function AsignarControles($semanas_embarazo)
    {
        $control = new ControlController();
        $controles = \json_decode($control->asignar_controles($semanas_embarazo));
        $asignados = \collect();

        foreach ($controles as $control) {
            $asignados->push($control->id);
        }

        return ($asignados);

    }

    public function reporte()
    {
        return view('models.paciente.reporte');
    }

    public function reporteDownload(Request $request)
    {
        $desde = Carbon::parse($request->desde)->toDateString();
        $hasta = Carbon::parse($request->hasta)->toDateString();
        return Excel::download(new PacientesExport($desde, $hasta), 'pacientes.xlsx');
        
    }
}
