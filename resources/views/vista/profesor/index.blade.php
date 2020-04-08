@extends("theme.$theme.layout")
@section('titulo')
    Profesor
@endsection
    
@section("scripts")
<script src="{{asset("assets/pages/scripts/archivo/index.js")}}" type="text/javascript"></script>
@endsection



@section('contenido')
<div class="card">
   <div class="card-header">
    <div class="col-lg-12">
        @csrf
            <div class="border border-white">
                <h1><small>Profesor</small></h1>
                <a href="{{route('crear_profesor')}}" class="btn  btn-lg btn-outline-primary pull-right ">Crear profesor</a>
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
                            <div class="container"> Puede buscar por Nombre o Identificación</div> 
                                <input type="text" class="form-control" name="search" placeholder="Buscar">
                                <div class="input-group-append">
                                    <button class="btn btn-primary"><i class="fas fa-search "></i></button>
                                </div>
                            </div>

                        </div>
                </form>

             <div class="table-responsive">
                <table class="table table-striped table-md">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Identificación</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Celular</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Tipo de sangre</th>
                            <th>Eps</th>
                            <th>Especialidad</th>
                            <th>Archivo</th>
                            <th>Observación</th>
                            <th>Estado</th>
                            <th>Opciones</th>

                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $profesor)
                            <tr>

                                <td>{{$profesor->id}}</td>
                                <td>{{$profesor->identificacion}}</td> 
                                <td>{{$profesor->nombre }}</td>
                                <td>{{$profesor->apellido}}</td>
                                <td>{{$profesor->celular}}</td>
                                <td>{{$profesor->edad}}</td>
                                <td>{{$profesor->direccion}}</td>
                                <td>{{$profesor->correo}}</td>
                                <td>{{$profesor->tipo_sangre}}</td>
                                <td>{{$profesor->eps}}</td>
                                <td>{{$profesor->especialidad}}</td>
                                <td><a href="{{route('ver_profesor', $profesor->id)}}" class="ver-profesor">{{$profesor->archivo}}</a></td>
                                <td>{{$profesor->observacion}}</td>
                                <td>{{$profesor->estado == 1 ?'Activo' : 'Inactivo' }}</td>
                                <td>
 
                                        <a href="{{route("editar_profesor", ['id' => $profesor->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        {{-- <form action="{{route("eliminar_profesor",  ['id' => $profesor->id])}}" class="d-inline form-eliminar" method="POST">
                                            @csrf @method("delete")
                                            <button type="submit" class="btn-accion-tabla eliminar tooltipsC" title="Eliminar este registro"><i class="fa fa-times-circle text-danger"></i></button>
                                        </form> --}}
                                {{-- <form action="" >
                                @if($profesor->estado==1)
                                <a href="{{route("eliminar_profesor", ['/0' => $profesor->id])}}"></a>  
                                <button type="submit" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove"> </i>Inactivar</button>
                                @endif
                                @if ($profesor->estado==0)
                                <a href="{{route("eliminar_profesor", ['/1' => $profesor->id])}}"></a>  
                                <button type="submit" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i>Activar</button>
                                @endif
                                </form>
                                        --}}
                                
                                    </td>
                              </tr>
                        @endforeach
                    </tbody>    
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
                <h4 class="modal-title">Profesor</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
@endsection