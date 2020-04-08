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
                <h3 class="box-title">Editar Acudiente</h3>
                <a href="{{route('acudiente')}}" class="btn  btn-lg btn-outline-primary pull-right">Listado</a>
            </div>
            <form action="{{route('actualizar_acudiente', ['id' => $data->id])}}" id="form-general" class="form-horizontal" method="POST" autocomplete="off">
                @csrf @method("put")
                <div class="box-body">
                    @include('vista.acudiente.form')
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