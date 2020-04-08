@extends("theme.$theme.layout")
@section('titulo')
    Profesor
@endsection

@section("styles")
<link href="{{asset("assets/js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
<script src="{{asset("assets/js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
<script src="{{asset("assets/js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/archivo/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')

<div class="card col-lg-9 ">
    <div class="card-header">
     <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="border border-white">
                <h1><small> Crear Profesor</small></h1>
                <div class="box-tools pull-right">
                    <a href="{{route('profesor')}}" class="btn  btn-lg btn-outline-primary "><i class="fa fa-fw fa-reply-all"></i> Volver al listado</a>
                </div>
            </div>
            <form action="{{route('registrar_profesor')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off"  enctype="multipart/form-data" >
                @csrf
                <div class="box-body">
                    @include('vista.profesor.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-crear')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection