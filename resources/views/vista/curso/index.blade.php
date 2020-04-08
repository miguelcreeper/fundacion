@extends("theme.$theme.layout")
@section('titulo')
Curso
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
                <h3 class="box-title">Curso</h3>
                <a href="{{route('crear_curso')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear curso</a>
            </div>
            <form action="{{route('buscar_profesor')}}" method="get" >
                <div class="card-body p-0">
                    <!-- {{-- @include('partials._message') --}} -->
                    <div class="float-right p-3">
                        <div class="input-group">
                            <!-- {{-- <select class="custom-select" id="inputGroupSelect05">
                            <option value="0" selected="selected">Buscar por...</option>
                            <option value="1">Nombre</option>
                            <option value="2">Email</option>
                        </select> --}} -->
                        <div class="container"> Puede buscar por id o salon</div> 
                            <input type="text" class="form-control" name="search" placeholder="Buscar">
                            <div class="input-group-append">
                                <button class="btn btn-primary"><i class="fas fa-search "></i></button>
                            </div>
                        </div>

                    </div>
            </form>

            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Salón</th>
                            <th>Sede</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Cupos Maximos</th>
                            <th>Tipo Curso</th>
                            <th>Estado Curso</th>
                            <th>Jornada</th>
                            <th>Profesor</th>

                           
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $curso)
                            <tr>

                                <td>{{$curso->id}}</td>
                                <td> {{$curso->salon}}</td>
                                <td> {{$curso->sede}}</td>
                                <td> {{$curso->fecha_inicio}}</td>
                                <td> {{$curso->fecha_fin}}</td>
                                <td> {{$curso->cupos_maximos}}</td>
                                <td>{{$curso->tipo_curson->nombre}}</td>
                                <td>{{$curso->estado_curson->nombre}}</td>
                                <td>{{$curso->Jornadan->nombre}}</td>
                                <td>{{$curso->profesorn->nombre}}</td>
                                <td>                                

                                <td>
                                    <a href="{{route("editar_curso", ['id' => $curso->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("eliminar_curso",  ['id' => $curso->id])}}" class="d-inline form-eliminar" method="POST">
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
    
