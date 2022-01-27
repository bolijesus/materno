
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>     
                <th>Opciones</th>           
            </tr>
        </tfoot>
        <tbody>
            
            @foreach ($paquetes as $paquete)
                <tr> 
                    <td>{{ $paquete->nombre }}</td>
                    <td>{{ $paquete->descripcion }}</td>
                    <td>
                        <a href="{{ route('backoffice.paquete.edit',$paquete) }}" class="btn btn-xs btn-primary waves-effect" data-toggle="tooltip" data-placement="bottom" title data-original-title="Editar">
                            <i class="material-icons small">mode_edit</i>
                        </a>
                        <a data-paquete="{{ $paquete->id }}" class="eliminar btn btn-xs btn-danger waves-effect" data-toggle="tooltip" data-placement="bottom" title data-original-title="Eliminar">
                            <i class="material-icons small">delete</i>
                        </a>
                    </td>
                </tr>
            @endforeach
                
            
        </tbody>
    </table>
</div>
            