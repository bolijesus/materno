<?php

namespace App\Http\Controllers;

use App\Paquete;
use Illuminate\Http\Request;
use PhpParser\Builder\Param;

class PaqueteController extends Controller
{
    public function index (){
        $paquetes = Paquete::all();
        return \view('models.paquete.index', \compact('paquetes'));
    }

    public function create()
    {
        return \view('models.paquete.create',['paquete'=>new Paquete()]);
    }

    public function store(Request $request)
    {
        Paquete::create($request->only(['nombre','descripcion','con_control']));

        return \redirect()->route('backoffice.paquete.index')->with('alert', \swal("
        'Se creo un nuevo PAQUETE!',
        'El PAQUETE fue creado satisfactoriamente',
        'success'
    "));

    }

    public function show(Paquete $paquete)
    {
        # code...
    }

    public function edit(Paquete $paquete)
    {
        return \view('models.paquete.edit', \compact(['paquete']));
    }

    public function update(Request $request, Paquete $paquete)
    {
        $paquete->update($request->only(['nombre','descripcion','con_control']));

        return \redirect()->route('backoffice.paquete.index')->with('alert',swal("
        'Se Actualizo el PAQUETE!',
        'El PAQUETE fue actualizado satisfactoriamente',
        'success'
    "));
    }

    public function destroy(Paquete $paquete)
    {
        $cups=\collect();
         
        foreach ($paquete->cups as $cup) {
            $cups->push($cup->id);
        }

        if (\request()->ajax()) {
            try {
                $paquete->cups()->detach($cups);
                $paquete->delete();
                return \json_encode(\true);
            } catch (\Throwable $th) {
                return \json_encode(false);
            }
        }
    }
}
