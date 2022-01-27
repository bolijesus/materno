
<table>
    <thead>
    <tr>
        <th>Tipo documento</th>
        <th>Docuemento</th>
        <th>Primer nombre</th>
        <th>Segundo Nombre</th>
        <th>Primer apellido</th>
        <th>Segundo apellido</th>
        <th>Edad</th>
        <th>Fecha nacimiento</th>
        <th>¿Tenia control?</th>
        <th>Seguimiento</th>
        <th>fecha de la cita</th>
        <th>Asistio</th>
        <th>Numero de  Control</th>
        <th>Numero de  paquete</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($pacientes as $paciente)
            @if (!$paciente->load('citas')->citas()->whereBetween('citas.fecha_control',[$desde, $hasta])->get()->isEmpty())
            @foreach ($paciente->load('citas')->citas()->whereBetween('citas.fecha_control',[$desde, $hasta])->get() as $cita)
                
                <tr>
                    <td>{{ $paciente->tipo_documento }}</td>
                    <td>{{ $paciente->documento }}</td>
                    <td>{{ $paciente->primer_nombre }}</td>
                    <td>{{ $paciente->segundo_nombre }}</td>
                    <td>{{ $paciente->primer_apellido }}</td>
                    <td>{{ $paciente->segundo_apellido }}</td>
                    <td>{{ $paciente->edad }}</td>
                    <td>{{ $paciente->fecha_nacimiento}}</td>
                    <td>{{ $paciente->control == 1 ? 'si' : 'no'}}</td>
                    <td>{{ $paciente->seguimiento == 1 ? 'PRIMERA VEZ' : 'CONTROL'}}</td>
                    <td>{{ $cita->fecha_control}}</td>
                    <td>
                        @if ($cita->estado == 1 )
                            si
                        @else
                            no
                        @endif
                    </td>
                    <td>{{ optional($paciente->controlActual($cita->cantidad_cita,$paciente))->nombre }}</td>
                    <td>{{ $paciente->paqueteActual($cita->cantidad_cita,$paciente) }}</td>
                </tr>
        
            @endforeach
            @endif
            
                    
        @endforeach
    </tbody>
</table>