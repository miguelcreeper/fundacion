@extends("theme.$theme.layout")
@section('titulo')
Estado Curso
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
     <div class="col-lg-12">
        @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Estado Curso</h3>
                <a href="{{route('crear_estado_curso')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear Estado curso</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>

                           
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $estado)
                            <tr>

                                <td>{{$estado->id}}</td>
                                <td> {{$estado->nombre}}</td>

                                <td>                                
                                    {{-- <a href="{{route("editar_estado_curso", ['id' => $estado->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a> --}}
                                    <form action="{{route("eliminar_estado_curso",  ['id' => $estado->id])}}" class="d-inline form-eliminar" method="POST">
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
    
