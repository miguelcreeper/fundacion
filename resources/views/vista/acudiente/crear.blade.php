@extends("theme.$theme.layout")
@section('titulo')
    Acudiente
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/secre/acudiente/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card col-lg-9 ">
    <div class="card-header">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h1><small>Crear acudiente</small></h1>
                <div class="box-tools pull-right">
                    <a href="{{route('acudiente')}}" class="btn  btn-lg btn-outline-primary">
                        <i class="fa fa-fw fa-reply-all"></i> Volver al listado
                    </a>
                </div>
            </div>
            <form action="{{route('registrar_acudiente')}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf
                <div class="box-body">
                    @include('vista.acudiente.form')
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