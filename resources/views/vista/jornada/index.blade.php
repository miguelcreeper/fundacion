@extends("theme.$theme.layout")
@section('titulo')
Jornada
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
                <h3 class="box-title">Jornada</h3>
                <a href="{{route('crear_jornada')}}" class="btn btn-success btn-sm pull-right">Crear Jornada</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descripción</th>
                            <th>Hora Inicio</th>
                            <th>Hora Fin</th>
                          
                           
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $jornada)
                            <tr>

                                <td>{{$jornada->id}}</td>
                                <td> {{$jornada->descripcion}}</td>
                                <td> {{$jornada->hora_inicio}}</td>
                                <td> {{$jornada->hora_fin}}</td>
                                <td>                                
                                    {{-- <a href="{{route("editar_jornada", ['id' => $jornada->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a> --}}
                                    <form action="{{route("eliminar_jornada",  ['id' =>$jornada->id])}}" class="d-inline form-eliminar" method="POST">
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
    
