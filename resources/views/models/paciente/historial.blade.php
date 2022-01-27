


<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
            <tr>
                <th>fecha de la cita</th>
                <th>Asistio</th>
                <th>Numero de  Control</th>
                <th>Numero de  paquete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paciente->citas as $cita)
                
            <tr>
                <td>{{ $cita->fecha_control}}</td>
                <td>
                    @if ($cita->estado == 1 )
                        si
                    @else
                        no
                    @endif
                </td>
                <td>{{ $paciente->controlActual($cita->cantidad_cita,$paciente)->nombre }}</td>
                <td>{{ $paciente->paqueteActual($cita->cantidad_cita,$paciente) }}</td>
            </tr>
            
            @endforeach
       </tbody>
    </table>
</div>
            