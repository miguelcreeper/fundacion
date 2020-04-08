
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


{{--Llave foreign key de matricula  --}}
<div class="form-group ">
    <label for="acudiente_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Matricula</label>
    <div class="col-sm-12 col-md-7">
        <select name="acudiente_id" id="acudiente_id" class="form-control">
             @foreach ($matricula1 as $matriculan) 
            <option value="{{$matriculan->id}}">{{$matriculan->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>