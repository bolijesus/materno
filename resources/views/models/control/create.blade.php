@extends('templates.index')

@section('title','Crear Control | FVCA')

@section('css')
   {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
    
    
@endsection

{{-- SECCION PARA CAMBIAR LA CLASE DE LA ETIQUETA BODY PARA EL INICIO DE SESION --}}
{{-- @section('type_page','login-page ls-closed') --}} 

{{-- breadcrumbs --}}

@section('breadcrumbs')
    <li><a href="{{ route('index') }}">Inicio</a></li>
        <li><a href="{{ route('backoffice.control.index') }}">Controles</a></li>
        <li class="active">Crear</li>
@endsection

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Crear control 
                </h2>
            </div>
            <div class="body">
                    <form action="{{ route('backoffice.control.store') }}" method="POST">
                        @csrf
                        @include('models.control.form-control',['submit_name'=>'CREAR'])
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

@endsection