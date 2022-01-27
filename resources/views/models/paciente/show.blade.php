
@extends('templates.index')

@section('title','Paciente '.$paciente->primer_nombre)

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('css/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">

@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
<li><a href="{{ route('index') }}">Inicio</a></li>
<li><a href="{{ route('backoffice.paciente.index') }}">Pacientes</a></li>
<li class="active">{{ $paciente->primer_nombre.' '.$paciente->primer_apellido }}</li>
@endsection

@section('content')
<form action="{{ route('backoffice.asistencia.store', $paciente) }}" method="post">
    @csrf
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-3">                
            
            <div class="card profile-card">
                <div class="profile-header">&nbsp;</div>
                <div class="profile-body">
                    <div class="image-area">
                        <img style="width: 85%" src="../../images/avatar-16.png" alt="AdminBSB - Profile Image" />
                    </div>
                    <div class="content-area">
                        <h3>{{ $paciente->primer_nombre }} {{ $paciente->primer_apellido }}</h3>
                        <b>Paciente:</b>
                        <i>{{ $paciente->seguimiento() }}</i>
                    </div>
                </div>
                <div class="profile-footer">
                    <ul>
                        <li>
                            <span>Control actual:</span>
                            <span>{{ optional($paciente->controlActual())->nombre }}</span>
                        </li>
                        <li>
                            @if ($paciente->controlSiguiente() != 'NO HAY MAS CITAS')
                                <span>Siguiente control:</span>
                            @endif
                            <span>{{ optional($paciente->controlSiguiente())->nombre }}</span>
                        </li>
                    </ul>
                    @if ($paciente->controlSiguiente() == 'NO HAY MAS CITAS')
                        <div class="btn btn-danger btn-lg waves-effect btn-block">FINALIZADO</div>
                    @else
                        <button type="submit" class="btn btn-primary btn-lg waves-effect btn-block">ASISTIO</button>
                    @endif
                </div>
            </div>
            
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card">
                    <div class="body">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#citas" aria-controls="citas" role="tab" data-toggle="tab">Citas</a></li>
                                <li role="presentation"><a href="#historial_citas" aria-controls="settings" role="tab" data-toggle="tab">Historial de Citas</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="citas">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label for="">Fecha de inicio:</label>
                                                            <p>{{ $paciente->fechaInicio() }}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label for="">Fecha de control:</label>
                                                            <p>{{ $paciente->fechaControl() }}</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            @if ($paciente->controlSiguiente() != 'NO HAY MAS CITAS')
                                                                <label for="">Fecha del proximo control:</label>
                                                                
                                                                <div class="form-line datepicker" id="bs_datepicker_container_proxima">
                                                                        <input value="{{ $paciente->fechaProxima() }}" autocomplete="off"  type="text" class="form-control" name="fecha_proxima" id="fecha_proxima" placeholder="F. proxima cita" />
                                                                </div>
                                                            @else
                                                                <label for="">Fecha de finalizacion:</label>
                                                                <label for="">{{ $paciente->fechaControl() }}</label>
                                                            @endif
                                                            
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="">Paquete actual:</label>
                                                            <p>{{ $paciente->paqueteActual() }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Siguiente paquete:</label>
                                                            <p>{{ $paciente->paqueteSiguiente() }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="">Semanas embarazo inicial:</label>
                                                            <p>{{ $paciente->semanas_embarazo }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="">Paciente con control:</label>
                                                            <p>{{ $paciente->control == 1 ? 'Si' : 'No'}}</p>
                                                        </div>
                                                    </div>
                                                    


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="historial_citas">
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">
                                                <div class="body">
                                                    
                                                    @include('models.paciente.historial')

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
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
{{-- @include('models.paciente.ajax.fecha_prox_control') --}}
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