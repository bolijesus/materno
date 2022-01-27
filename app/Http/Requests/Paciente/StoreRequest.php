<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'primer_nombre' => 'required|string',
            'primer_apellido' => 'required|string',
            'fecha_nacimiento' => 'required',
            'documento' => 'required',
            'edad' => 'required',
            'tipo_documento' => 'required',
            'tiene_control' => 'required',
            'fecha_ingreso' => 'required',
            'semanas_embarazo' => 'required',
            'fecha_proxima' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'primer_nombre.required' => 'El primer nombre es requerido.',
            'primer_nombre.string' => 'El primer nombre no puede ser numerico.',
            'primer_apellido.required' => 'El primer apellido es requerido.',
            'primer_apellido.string' => 'El primer apellido no puede ser numerico.',
            'fecha_nacimiento.required' => 'Ingresar la fecha de nacimeinto.',
            'edad.required' => 'Ingresar la edad del paciente.',
            'documento.required' => 'Ingresar el documento.',
            'tiene_control.required' => 'Tiene control el paciente?',
            'tipo_documento.required' => 'Ingresar el tipo de documento.',
            'fecha_ingreso.required' => 'Ingresar La fecha de ingreso.',
            'semanas_embarazo.required' => 'Ingresar las semanas de embarazo.',
            'fecha_proxima.required' => 'Ingresar la fecha de la proxima cita.',
        ];
    }
}
