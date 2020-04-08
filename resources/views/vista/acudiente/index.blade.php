@extends("theme.$theme.layout")
@section('titulo')
Acudiente
@endsection

@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection

@section('contenido')
<div class="card">
    <div class="card-header">
     <div class="col-lg-12">
         @csrf
             <div class="border border-white">
                 <h1><small>Acudiente</small></h1>
                <a href="{{route('crear_acudiente')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear acudiente</a>
            </div>
            <form action="{{route('buscar_acudiente')}}" method="get" >
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
                            <th>Celular</th>
                            <th>Ocupación</th>
                            <th>Nivel academico</th>
                            <th>Tipo de sangre</th>
                            <th>Edad</th>
                            <th>Dirección</th>
                            <th>Correo</th>
                            <th>Terminos</th>
                            <th>Estado</th>

                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $acudiente)
                            <tr>

                                <td>{{$acudiente->id}}</td>
                                <td> {{$acudiente->identificacion}}</td> 
                                <td>{{$acudiente->nombre }}</td>
                                <td>{{$acudiente->apellido}}</td>
                                <td>{{$acudiente->celular}}</td>                                
                                <td>{{$acudiente->ocupacion}}</td> 
                                <td>{{$acudiente->nivel_academico}}</td>  
                                <td>{{$acudiente->tipo_sangre}}</td>
                                <td>{{$acudiente->edad}}</td>
                                <td>{{$acudiente->direccion}}</td>
                                <td>{{$acudiente->correo}}</td>
                                <td>{{$acudiente->condicion}}</td>
                                <td>{{$acudiente->estado}}</td>
                                <td>
 
                                    <a href="{{route("editar_acudiente", ['id' => $acudiente->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("eliminar_acudiente",  ['id' => $acudiente->id])}}" class="d-inline form-eliminar" method="POST">
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
    
