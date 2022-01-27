
<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
        <thead>
            <tr>
                <th>nombre</th>
                <th>Descripcion</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>nombre</th>
                <th>Descripcion</th>     
                <th>Opciones</th>           
            </tr>
        </tfoot>
        <tbody>
            
            @foreach ($controles as $control)
                <tr> 
                    <td>{{ $control->nombre }}</td>
                    <td>{{ $control->descripcion }}</td>
                    <td>
                    
                        <a href="{{ route('backoffice.control.edit',$control) }}" class="btn btn-xs btn-primary waves-effect" data-toggle="tooltip" data-placement="bottom" title data-original-title="Editar"><i class="material-icons small">mode_edit</i></a>
                        
                        <a href="{{ route('backoffice.control.rango.show',$control) }}" class="btn btn-xs bg-teal waves-effect" data-toggle="tooltip" data-placement="bottom" title data-original-title="Añadir rango de fechas"><i class="material-icons small">date_range</i></a>
                               
                        <a data-control="{{ $control->id }}" class="eliminar btn btn-xs btn-danger waves-effect" data-toggle="tooltip" data-placement="bottom" title data-original-title="Eliminar"><i class="material-icons small">delete</i></a>
                           
                        
                    </td>
                </tr>
            @endforeach
                
            
        </tbody>
    </table>
</div>
            