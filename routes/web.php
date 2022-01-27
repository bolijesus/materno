<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Control;
use App\Cup;
use App\Exports\PacientesExport;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\DistribucionPaqueteController;
use App\Http\Controllers\PacienteController;
use App\Paciente;
use App\Paquete;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route as Route;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

// DB::listen(function($query){
//     echo "<h1><pre>{$query->sql}<pre></h1>";
// });
Route::get('/test',function ()
{
    // $pacientes = Paciente::join('cita_paciente','pacientes.id','=', 'cita_paciente.paciente_id')
    //     ->join('citas','citas.id','=','cita_paciente.cita_id')
    //     ->whereBetween('citas.fecha_control',['2021-02-23','2021-02-24'])
    //     ->get();
    // $pacientes = Paciente::find(1)->citas()->whereBetween('citas.fecha_control',['2021-03-23','2021-03-24'])->get();
    $pacientes = Paciente::all();
    
        return view('exports.paciente', compact('pacientes'));
});

Route::get('/',function ()
{
    return redirect()->route('backoffice.paciente.index');
})->name('index');

//BACK OFFICE
Route::name('backoffice.')->group(function(){
    Route::resource('/cup','CupController');
    Route::resource('/paquete','PaqueteController');

    Route::resource('/control','ControlController');
    Route::get('/control/rango/{control}','ControlController@viewRangoFecha')->name('control.rango.show');
    Route::post('control/rango','ControlController@storeRangoFecha')->name('control.rango.store');
    Route::get('/controles','ControlController@allControl');

    Route::resource('/paciente','PacienteController');
    Route::post('/asistencia/{paciente}','PacienteController@asistenciaStore')->name('asistencia.store');
    
    Route::get('/reporte/pacientes','PacienteController@reporte')->name('reporte.pacientes');
    Route::post('/reporte/pacientes','PacienteController@reporteDownload')->name('reporte.download.pacientes');
});

Route::post('statuses', 'TestController@index')->name('test.index');
