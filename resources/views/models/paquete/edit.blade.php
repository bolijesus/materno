@extends('templates.index')

@section('title','Editar paquete || FVCA')

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('seccion-editar-paquete')
<li class="{{ active('backoffice.paquete.edit') }}">
    <a href="{{ route('backoffice.paquete.edit',$paquete) }}" >
        <span>editar</span>
    </a>
</li>
@endsection

@section('breadcrumbs')
    <li><a href="{{ route('index') }}">Inicio</a></li>
        <li><a href="{{ route('backoffice.paquete.index') }}">Paquetes</a></li>
        <li class="active">Editar</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Editar paquete #{{ $paquete->nombre }}
                </h2>
            </div>
            <div class="body">
                <div class="body">
                    <form action="{{ route('backoffice.paquete.update', $paquete) }}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('models.paquete.form-paquete',['submit_name'=>'EDITAR'])
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

@endsection