
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
            <tr>
                <th>Documento</th>
                <th>Primer nombre</th>
                <th>Primer Apellido</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Documento</th>
                <th>Primer nombre</th>
                <th>Primer Apellido</th>
                <th>Opciones</th>          
            </tr>
        </tfoot>
        <tbody>
            
            @foreach ($pacientes as $paciente)
                <tr> 
                    <td>{{ $paciente->documento }}</td>
                    <td>{{ $paciente->primer_nombre }}</td>
                    <td>{{ $paciente->primer_apellido }}</td>
                    <td>
                        <form action="{{ route('backoffice.paciente.destroy',$paciente) }}" method="post"
                            data-toggle="tooltip" data-placement="bottom" title data-original-title="Eliminar">
                            @method('DELETE') @csrf
                            <a href="{{ route('backoffice.paciente.show',$paciente) }}"
                                class="btn btn-xs bg-teal waves-effect" data-toggle="tooltip" data-placement="bottom" title
                                data-original-title="Asistencia de citas"><i class="material-icons small">date_range</i></a>


                            <a href="{{ route('backoffice.paciente.edit',$paciente) }}"
                                class="btn btn-xs btn-primary waves-effect" data-toggle="tooltip" data-placement="bottom"
                                title data-original-title="Editar">
                                <i class="material-icons small">mode_edit</i>
                            </a>

                            <button type="submit"
                                class="btn btn-xs btn-danger waves-effect "><i class="material-icons small">delete</i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
                
            
        </tbody>
    </table>
</div>
            
