@extends("theme.$theme.layout")
@section('titulo')
mensualidad
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
                <h3 class="box-title">mensualidad</h3>
                <a href="{{route('crear_mensualidad')}}" class="btn  btn-lg btn-outline-primary pull-right">Crear mensualidad</a>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-striped table-bordered table-hover" id="tabla-data">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fecha</th>
                            <th>Total pago</th>
                            <th>Matricula</th>
                            <th>Estado</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($datas as $mensualidad)
                            <tr>

                                <td>{{$mensualidad->id}}</td>
                                <td> {{$mensualidad->fecha}}</td>
                                <td> {{$mensualidad->total_pago}}</td>
                                <td>{{$mensualidad->matriculan->id}}</td>
                                <td>{{$mensualidad->estado == 1 ?'Activo' : 'Inactivo' }}</td>
                                <td>                                
                                <td>
                                    <a href="{{route("editar_mensualidad", ['id' => $mensualidad->id])}}" class="btn-accion-tabla tooltipsC" title="Editar este registro">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{route("eliminar_mensualidad",  ['id' => $mensualidad->id])}}" class="d-inline form-eliminar" method="POST">
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
    
