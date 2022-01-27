<?php

namespace App\Http\Controllers;

use App\Cup;
use App\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cups = Cup::all();
        return \view('models.cup.index', \compact('cups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetes = Paquete::all();
        return \view('models.cup.create',['cup'=>new Cup(),'paquetes'=>$paquetes]);
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
                // crear clases polimorficas
                $cup = Cup::create($request->only(['codigo','descripcion']));
                $cup->paquetes()->sync($request->paquetes);            
                
            });

        } catch (\Throwable $th) {
            \dd($th);
        }
        
        return \redirect()->route('backoffice.cup.index')->with('alert', \swal("
            'Se creo un nuevo CUPS!',
            'El CUPS fue creado satisfactoriamente',
            'success'
        "));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function show(Cup $cup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function edit(Cup $cup)
    {
        $paquetes = Paquete::all();
        return \view('models.cup.edit',\compact(['cup', 'paquetes']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cup $cup)
    {
        $cup->update($request->except(['paquetes']));
        $cup->paquetes()->sync($request->paquetes);

        return \redirect()->route('backoffice.cup.index')->with('alert',swal("
        'Se Actualizo el CUPS!',
        'El CUPS fue actualizado satisfactoriamente',
        'success'
    "));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cup  $cup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cup $cup)
    {
        $paquetes=\collect();
         
        foreach ($cup->paquetes as $paquete) {
            $paquetes->push($paquete->id);
        }

        if (\request()->ajax()) {
            try {
                $cup->paquetes()->detach($paquetes);
                $cup->delete();
                return \json_encode(\true);
            } catch (\Throwable $th) {
                return \json_encode(false);
            }
        }
    }
}
