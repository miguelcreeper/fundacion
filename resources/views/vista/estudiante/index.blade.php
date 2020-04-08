@extends("theme.$theme.layout")
@section('titulo')
Estudiante
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
     <div class="col-lg-12">
         @csrf
        @include('includes.mensaje')
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">estudiante</h3>
                <a href="{{route('crear_estudiante')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear estudiante</a>
            </div>
            <form action="{{route('buscar_estudiante')}}" method="get" >
                <div class="card-body p-0">
                    <!-- {{-- @include('partials._message') --}} -->
                    <div class="float-right p-3">
                        <div class="input-group">
                            <!-- {{-- <select class="custom-select" id="inputGroupSelect05">
                            <option value="0" selected="selected">Buscar por...</option>
                            <option value="1">Nombre</option>
                            <option value="2">Email</option>
                        </select> --}} -->
                        <div class="container"> Puede buscar por Nombre o Identificación</div> 
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
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Tipo de identificación</th>
                            <th>Celular</th>
                            <th>Correo</th>
                            <th>Tipo de sangre</th>
                            <th>Eps</th>
                            <th>Edad</th>
                            <th>Dirección</th>
                            <th>Barrio</th>
                            <th>Ocupación</th>
                            <th>Archivo</th>
                            <th>acudiente</th>
                            <th>Observación</th>
                            <th>Estado</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($datas as $estudiante)
                            <tr>

                                <td>{{$estudiante->id}}</td>
                                <td> {{$estudiante->identificacion}}</td> 
                                <td>{{$estudiante->nombre }}</td>
                                <td> {{$estudiante->apellido}}</td>
                                <td> {{$estudiante->tipo_identificacion}}</td>
                                <td> {{$estudiante->celular}}</td>
                                <td> {{$estudiante->correo}}</td>
                                <td> {{$estudiante->tipo_sangre}}</td>
                                <td> {{$estudiante->eps}}</td>
                                <td> {{$estudiante->edad}}</td>
                                <td> {{$estudiante->direccion}}</td>
                                <td> {{$estudiante->barrio}}</td>
                                <td> {{$estudiante->ocupacion}}</td>
                                <td><a href="{{route('ver_profesor', $estudiante->id)}}" class="ver-profesor">{{$estudiante->archivo}}</a></td>
                                <td>{{$estudiante->acudienten->nombre}}</td>
                                <td>{{$estudiante->observacion}}</td>
                                <td>{{$estudiante->estado == 1 ?'Activo' : 'Inactivo' }}</td>
                               
                                <td>                                
                                    <a href="{{route("editar_estudiante", ['id' => $estudiante->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("eliminar_estudiante",  ['id' => $estudiante->id])}}" class="d-inline form-eliminar" method="POST">
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
<div class="modal fade" id="modal-ver-profesor" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Estudiante</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
    
