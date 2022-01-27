@extends('templates.index')

@section('title','Rango fechas || FVCA')

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">

    <!-- Range Slider Css -->
    <link href="{{ asset('css/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet" />
@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
<li><a href="{{ route('index') }}">Inicio</a></li>
<li><a href="{{ route('backoffice.control.index') }}">Controles</a></li>
<li class="active">Añadir rango de fechas</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Añadir rango de fecha a los controles y paquetes
                </h2>
            </div>
            <div class="body">
                
                <div class="body table-responsive">
                    <form action="{{ route('backoffice.control.rango.store') }}" method="post">
                       @csrf
                        <input hidden name="id_control"  value="{{ $control->id }}" />
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>CONTROL</th>
                                    <th>PAQUETE</th>
                                    <th>RANGO DE FECHAS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($control->paquetes as $paquete)
                                    <tr>
                                        <td>{{ $control->nombre }}</td>
                                        <td>{{ $paquete->nombre }}</td>
                                        <td>
                                            <input class="form-control rangeMaterno" type="text" name="rango_semana_embarazo[]" id="" value="{{ optional($paquete->pivot)->rango_semana_embarazo }}" />
                                            <input hidden name="id_paquetes[]"  value="{{ $paquete->id }}" />
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        <button class="btn btn-danger" type="submit">ASIGNAR</button>
                    </form>
                </div>
                
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

<!-- RangeSlider Plugin Js -->
<script src="{{ asset('js/ion-rangeslider/js/ion.rangeSlider.js') }}"></script>
<script src="{{ asset('js/ion-rangeslider/js/custom.js') }}"></script>


@endsection