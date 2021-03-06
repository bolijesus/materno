
@extends('templates.index')

@section('title','Lista Controles | FVCA')

@section('css')
<link href="{{ asset('css/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">


@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
    <li><a href="{{ url('/') }}">Inicio</a></li>
    <li class="active">Controles</li>
@endsection

@section('content')
<!-- Exportable Table -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Controles 
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{ route('backoffice.control.create') }}">Crear Control</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">               
                @if ($controles->isNotEmpty())                    
                    @include('models.control.content-index')
                @else
                   <h2>No hay controles para mostrar </h2> 
                @endif
            </div>
        </div>
    </div>
</div>
<!-- #END# Exportable Table -->
@endsection


@section('scripts')
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ asset('js/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('js/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>
    <script src="{{ asset('js/tables/jquery-datatable.js') }}"></script>
    <script src="{{ asset('js/pages/ui/tooltips-popovers.js') }}"></script>

    <!-- RangeSlider Plugin Js -->
    <script src="{{ asset('js/ion-rangeslider/js/ion.rangeSlider.js') }}"></script>
    <script src="{{ asset('js/ion-rangeslider/js/custom.js') }}"></script>
    
    @include('models.control.delete')
    

@endsection
