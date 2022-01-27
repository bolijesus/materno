@extends('templates.index')

@section('title','Titulo DEMO')

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
   <!-- Bootstrap DatePicker Css -->
   <link href="{{ asset('css/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
<li><a href="{{ route('index') }}">Inicio</a></li>
<li><a href="{{ route('backoffice.paciente.index') }}">Pacientes</a></li>
<li class="active">Reporte por mes</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Reporte Pacientes
                </h2>
            </div>
            <div class="body">
                
                <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Desde:</label>
                                                                    
                            <div class="form-line datepicker" id="bs_datepicker_container_proxima">
                                    <input autocomplete="off"  type="text" class="form-control" name="desde" id="desde" placeholder="Desde" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="">Hasta:</label>
                                                                    
                            <div class="form-line datepicker" id="bs_datepicker_container_proxima">
                                    <input autocomplete="off"  type="text" class="form-control" name="hasta" id="hasta" placeholder="Hasta" />
                            </div>
                        </div>
                    </div> 
                    <button class="btn btn-danger" type="submit">CONSULTAR</button>
                </form>               
                
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script> --}}
<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{ asset('js/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker/custom.js') }}"></script>

@endsection