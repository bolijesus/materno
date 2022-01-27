<?php

namespace App\Exports;

use App\Paciente;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PacientesExport implements FromView
{
    /**
    * @return \Illuminate\Database\Query\Builder
    */

    private $desde;
    private $hasta;

    public function __construct($desde, $hasta)
    {
        $this->desde = $desde;
        $this->hasta = $hasta;
    }

    public function view(): View
    { 
        $desde = $this->desde;
        $hasta = $this->hasta;

        $pacientes = Paciente::all();
    
        return view('exports.paciente', compact('pacientes','desde','hasta'));
    }

}
