@extends("theme.$theme.layout")
@section('titulo')
Tipo Curso
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/secre/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
     <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tipo Curso</h3>
                <a href="{{route('crear_tipo_curso')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear tipo curso</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Costo</th>
                            <th>Semestre</th>

                           
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $tipo_curso)
                            <tr>

                                <td>{{$tipo_curso->id}}</td>
                                <td> {{$tipo_curso->nombre}}</td>
                                <td> {{$tipo_curso->costo}}</td>
                                <td> {{$tipo_curso->semestre}}</td>
                                <td>                                

                                    {{-- <a href="{{route("editar_tipo_curso", ['id' => $tipo_curso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a> --}}
                                    <form action="{{route("eliminar_tipo_curso",  ['id' => $tipo_curso->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
    
