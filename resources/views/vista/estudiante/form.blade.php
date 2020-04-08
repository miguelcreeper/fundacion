
<div class="form-group">
    <label for="identificacion" class="col-lg-3 control-label requerido">Identificación</label>
    <div class="col-lg-8">
    <input type="number" name="identificacion" id="identificacion" class="form-control" value="{{old('identificacion', $data->identificacion ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="apellido" class="col-lg-3 control-label requerido">Apellido</label>
    <div class="col-lg-8">
    <input type="text" name="apellido" id="apellido" class="form-control" value="{{old('apellido', $data->apellido?? '')}}" required/>
    </div>
</div>


<div class="form-group">
    <label>Tipo Identificación</label>
    <select class="form-control col-lg-8" name="tipo_identificacion" id="tipo_identificacion"  value="{{old('tipo_identificacion', $data->tipo_identificacion ?? '')}}"required>
      <option>Cedula de ciudadania</option>
      <option>Tarjeta de identidad</option>
      <option>Documento extranjero</option>
    </select>
  </div>

  <div class="form-group">
    <label for="celular" class="col-lg-3 control-label requerido">Celular</label>
    <div class="col-lg-8">
    <input type="tel" name="celular" id="celular" class="form-control" value="{{old('celular', $data->celular?? '')}}"/>
    </div>
</div>
<div class="form-group">
    <label for="correo" class="col-lg-3 control-label requerido">Correo</label>
    <div class="col-lg-8">
    <input type="email" name="correo" id="correo" class="form-control" value="{{old('correo', $data->correo?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label>Tipo Sangre</label>
    <select class="form-control col-lg-8" name="tipo_sangre" id="tipo_sangre" value="{{old('tipo_sangre', $data->tipo_sangre ?? '')}}" required>
      <option>O+</option>
      <option>O-</option>
      <option>A+</option>
      <option>A-</option>
      <option>B+</option>
      <option>B-</option>
      <option>AB+</option>
      <option>AB-</option>
    </select>
  </div>

  <div class="form-group">
    <label>Eps</label>
    <select class="form-control col-lg-8" name="eps" id="eps"  value="{{old('eps', $data->eps ?? '')}}"required>
      <option>Salud Colmena</option>
      <option>Salud Total</option>
      <option>Cafesalud</option>
      <option>Compensar</option>
      <option>Colseguros</option>
      <option>Comfenalco Valle</option>
      <option>Saludcoop</option>
      <option>Cruz Blanca</option>
    </select>
  </div>

  <div class="form-group">
    <label for="edad" class="col-lg-3 control-label requerido">Fecha de nacimiento</label>
    <div class="col-lg-8">
    <input type="date" name="edad" id="edad" class="form-control" value="{{old('edad', $data->edad?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido">Dirección</label>
    <div class="col-lg-8">
    <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="barrio" class="col-lg-3 control-label requerido">Barrio</label>
    <div class="col-lg-8">
    <input type="text" name="barrio" id="barrio" class="form-control" value="{{old('barrio', $data->barrio?? '')}}" required/>
    </div>
</div>

<div class="form-group">
  <label>Ocupación</label>
  <select  class="form-control col-lg-8" name="ocupacion" id="ocupacion"  value="{{old('ocupacion', $data->ocupacion ?? '')}}"required>
    <option>Estudiante de Bachillerato</option>
    <option>Estudiante de Primaria</option>
    <option>Trabajador</option>
    <option>Tecnico</option>
    <option>Tecnologo</option>
  </select>
</div>

{{--Llave foreign key de acudiente  --}}
<div class="form-group ">
  <label for="acudiente_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Acudiente</label>
  <div class="col-sm-12 col-md-7">
      <select name="acudiente_id" id="acudiente_id" class="form-control">
           @foreach ($acudienten1 as $acudienten) 
          <option value="{{$acudienten->id}}">{{$acudienten->nombre}}</option> 
         {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
          @endforeach 
      </select>
  </div>
</div>


<div class="form-group">
  <label for="archivo" class="col-lg-3 control-label">Archivo</label>
  <div class="col-lg-5">
      <input type="file" name="archivo_up" id="archivo" data-initial-preview="{{isset($data->imagen) ? Storage::url("archivo/estudiante/$data->imagen") : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=archivo+estudiante"}}" accept="image/*"/>
  </div>
</div>
