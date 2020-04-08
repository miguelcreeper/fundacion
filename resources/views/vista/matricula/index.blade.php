@extends("theme.$theme.layout")
@section('titulo')
matricula
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
                <h3 class="box-title">matricula</h3>
                <a href="{{route('crear_matricula')}}" class="btn btn-success btn-sm pull-right">Crear matricula</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Estudiante</th>
                            <th>Curso</th>
                            <th>Estado</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($datas as $matricula)
                            <tr>

                                <td>{{$matricula->id}}</td>
                                <td>{{$matricula->estudianten->nombre}}</td>
                                <td>{{$matricula->curson->salon}}</td>
                                <td>{{$matricula->estado == 1 ?'Activo' : 'Inactivo' }}</td>
                                <td>                                
                                    <a href="{{route("editar_matricula", ['id' => $matricula->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("eliminar_matricula",  ['id' => $matricula->id])}}" class="d-inline form-eliminar" method="POST">
                                        @csrf @method("delete")
                                        <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </body>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
    
