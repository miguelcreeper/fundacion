@extends("theme.$theme.layout")
@section('titulo')
    estudiante  
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/estudiante/crear.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.form-error')
        @include('includes.mensaje')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar estudiante</h3>
                <a href="{{route('estudiante')}}" class="btn btn-info btn-sm pull-right">Listado</a>
            </div>
            <form action="{{route('actualizar_estudiante', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="box-body">
                    @include('vista.estudiante.form')
                </div>
                <div class="box-footer">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        @include('includes.boton-form-editar')
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection