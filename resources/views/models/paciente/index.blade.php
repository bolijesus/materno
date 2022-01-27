@extends('templates.index')

@section('title','Pacientes | FVCA')

@section('css')
<link href="{{ asset('css/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
<li><a href="{{ url('/') }}">Inicio</a></li>
<li class="active">Pacientes</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Pacientes
                </h2>
            </div>
            <div class="body">
                
                @include('models.paciente.content-index')
                
            </div>
        </div>
    </div>
</div>
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

@endsection