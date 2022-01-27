

@extends('templates.index')

@section('title','Crear Pacientes | FVCA')

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('css/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
<li><a href="{{ route('index') }}">Inicio</a></li>
<li><a href="{{ route('backoffice.paciente.index') }}">Pacientes</a></li>
<li class="active">Crear</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Crear paciente
                </h2>
            </div>
            @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
            <div class="body">
                <form action="{{ route('backoffice.paciente.store') }}" method="post">
                    @csrf
                   {{-- datos personales --}}
                    <div class="row clearfix">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header bg-red text-center">
                                    <h2>
                                        Datos personales 
                                    </h2>
                                    <ul class="header-dropdown m-r-0">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons">person</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('primer_nombre') }}" class="form-control" name="primer_nombre" id="primer_nombre" placeholder="Primer nombre" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input  type="text" value="{{ old('segundo_nombre')}}" name="segundo_nombre" id="segundo_nombre" class="form-control" placeholder="Segundo nombre" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('primer_apellido')}}" name="primer_apellido" id="primer_apellido" class="form-control" placeholder="Primer apellido" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('segundo_apellido')}}" name="segundo_apellido" id="segundo_apellido" class="form-control" placeholder="Segundo apellido" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group date">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line datepicker" id="bs_datepicker_container">
                                                        <input type="text" class="form-control" value="{{ old('fecha_nacimiento')}}" name="fecha_nacimiento"  id="fecha_nacimiento" placeholder="F. Nacimiento" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" min="0" max="150" value="{{ old('edad')}}" class="form-control" name="edad" id="edad" placeholder="Edad" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select id="tipo_documento" name="tipo_documento" class="form-control show-tick">
                                                        <option value="">-- Tipo documento --</option>
                                                        <option value="CC">C.C</option>
                                                        <option value="TI">T.I</option>
                                                        <option value="PE">P.E</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">                                            
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">credit_card</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('documento')}}" name="documento" id="documento" class="form-control" placeholder="Numero cedula" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">phone_iphone</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('celular')}}" name="celular" id="celular" class="form-control" placeholder="Numero celular" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">home</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="text" value="{{ old('direccion')}}" name="direccion" id="direccion" class="form-control" placeholder="Direccion" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 ">
                            <div class="card">
                                <div class="header bg-cyan text-center">
                                    <h2>
                                        Datos medicos
                                    </h2>
                                    <ul class="header-dropdown m-r-0">
                                        <li>
                                            <a href="javascript:void(0);">
                                                <i class="material-icons">local_hospital</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <select id="tiene_control" name="tiene_control" class="form-control show-tick">
                                                        <option value="">-- ¿Tiene control? --</option>
                                                        <option value="1">Si</option>
                                                        <option value="0">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group date">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">date_range</i>
                                                    </span>
                                                    <div class="form-line datepicker" id="bs_datepicker_container">
                                                        <input type="text" class="form-control" value="{{ old('fecha_ingreso')}}" name="fecha_ingreso" id="fecha_ingreso" placeholder="F. ingreso" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">pregnant_woman</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <input type="number" step="0.1" min="0" class="form-control" value="{{ old('semanas_embarazo')}}" name="semanas_embarazo" id="semanas_embarazo" placeholder="Semanas embarazo" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">car</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <select id="seguimiento" name="seguimiento"  class="form-control show-tick">
                                                            <option >--Seguimiento--</option>
                                                            <option selected value="1">Primera vez</option>
                                                            <option selected value="0">Control</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row clearfix">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <select id="control"  name="control" class="form-control show-tick">
                                                            <option >--Control--</option>
                                                            @foreach ($controles as $control)
                                                                <option value="{{ $control->id }}">{{ $control->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">person</i>
                                                    </span>
                                                    <div class="form-line">
                                                        <select id="paquete"  name="paquete" class="form-control show-tick">
                                                            <option >--Paquete--</option>
                                                            @foreach ($paquetes as $paquete)
                                                                <option value="{{ $paquete->id }}">{{ $paquete->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group date">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line datepicker" id="bs_datepicker_container_proxima">
                                                    <input autocomplete="off" value="{{ old('fecha_proxima')}}" type="text" class="form-control" name="fecha_proxima" id="fecha_proxima" placeholder="F. proxima cita" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>           
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="card">
                                <div class="header bg-green text-center">
                                    <h2>
                                        Controles
                                    </h2>
                                </div>
                                <div class="body">
                                    <ol id=controles>
                                       
                                    </ol>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-orange waves-effect pull-right col-lg-pull-4">
                                <i class="material-icons">send</i>
                                <span>CREAR</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>   
                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
{{-- <script src="{{ asset('js/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script> --}}
<script src="{{ asset('js/select2/select2.min.js') }}"></script>
<script src="{{ asset('js/select2/run.js') }}"></script>
<!-- Bootstrap Datepicker Plugin Js -->
<script src="{{ asset('js/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-datepicker/custom.js') }}"></script>
@include('models.paciente.ajax.controles')
@include('models.paciente.ajax.fecha_prox_cita')
@endsection