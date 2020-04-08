
<div class="form-group">
    <label for="salon" class="col-lg-3 control-label requerido">Salón</label>
    <div class="col-lg-8">
    <input type="text" name="salon" id="salon" class="form-control" value="{{old('salon', $data->salon ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="sede" class="col-lg-3 control-label requerido">Sede</label>
    <div class="col-lg-8">
    <input type="text" name="sede" id="sede" class="form-control" value="{{old('sede', $data->sede ?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="sede" class="col-lg-3 control-label requerido">Cupo Maximo</label>
    <div class="col-lg-8">
    <input type="number" name="sede" id="sede" class="form-control" value="{{old('sede', $data->cupo_maximo ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="fechai" class="col-lg-3 control-label requerido">Fecha Inicio</label>
    <div class="col-lg-8">
    <input type="date" name="fechai" id="fechai" class="form-control" value="{{old('fechai', $data->fecha_inicio?? '')}}" required/>
    
</div>
</div>

<div class="form-group">
    <label for="fechaf" class="col-lg-3 control-label requerido">Fecha Final</label>
    <div class="col-lg-8">
    <input type="date" name="fechaf" id="fechaf" class="form-control" value="{{old('fechaf', $data->ficha_final?? '')}}" required/>
    </div>
</div>

{{--Llave foreign key de profesor  --}}
<div class="form-group ">
    <label for="profesor_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Profesor</label>
    <div class="col-sm-12 col-md-7">
        <select name="profesor_id" id="profesor_id" class="form-control">
             @foreach ($profesor1 as $profesorn) 
            <option value="{{$profesorn->id}}">{{$profesorn->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  
{{--Llave foreign key de Jornada --}}
<div class="form-group ">
    <label for="Jornada_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jornada</label>
    <div class="col-sm-12 col-md-7">
        <select name="Jornada_id" id="Jornada_id" class="form-control">
             @foreach ($jornada1 as $Jornadan) 
            <option value="{{$Jornadan->id}}">{{$Jornadan->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  
{{--Llave foreign key de estado  --}}
<div class="form-group ">
    <label for="estado_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estado Curso</label>
    <div class="col-sm-12 col-md-7">
        <select name="estado_id" id="estado_id" class="form-control">
             @foreach ($estado1 as $estado_curson) 
            <option value="{{$estado_curson->id}}">{{$estado_curson->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  {{--Llave foreign key de tipo  --}}
<div class="form-group ">
    <label for="tipo_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tipo Curso</label>
    <div class="col-sm-12 col-md-7">
        <select name="tipo_id" id="tipo_id" class="form-control">
             @foreach ($tipo1 as $tipo_curson) 
            <option value="{{$tipo_curson->id}}">{{$tipo_curson->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>
