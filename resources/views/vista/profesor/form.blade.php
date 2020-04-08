<div class="form-group">
    <label for="identificacion" class="col-lg-12 control-label requerido">Identificación</label>
    <div class="col-lg-12">
    <input type="number" name="identificacion" id="identificacion"  class="form-control" value="{{old('identificacion', $data->identificacion ?? '')}}" required  maxlength="10" />
    @if ($errors->has('identificacion'))
     <small class="form-text text-danger">{{ $errors->first('identificacion') }}</small>
     @endif
    </div>
</div>
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-12">
    <input type="text" maxlength="30" name="nombre" id="nombre"  class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" pattern="{5,10} "required/>
    @if ($errors->has('nombre'))
     <small class="form-text text-danger">{{ $errors->first('nombre') }}</small>
     @endif
    </div>
</div>

<div class="form-group">
    <label for="apellido" class="col-lg-3 control-label requerido">Apellido</label>
    <div class="col-lg-12">
    <input type="text" maxlength="30" name="apellido" id="apellido" class="form-control" value="{{old('apellido', $data->apellido ?? '')}}" required/>
    @if ($errors->has('apellido'))
     <small class="form-text text-danger">{{ $errors->first('apellido') }}</small>
     @endif
    </div>
</div>

<div class="form-group">
    <label for="celular" class="col-lg-3 control-label requerido">Celular</label>
    <div class="col-lg-12">
    <input type="number" maxlength="11" name="celular" id="celular" class="form-control" value="{{old('celular', $data->celular?? '')}}" required/>
    @if ($errors->has('celular'))
     <small class="form-text text-danger">{{ $errors->first('celular') }}</small>
     @endif
 </div>

</div>
<div class="form-group">
    <label for="edad" class="col-lg-3 control-label requerido">Fecha de nacimiento</label>
    <div class="col-lg-12">
    <input type="date" name="edad" id="edad" class="form-control" value="{{old('edad', $data->edad?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido">Dirección</label>
    <div class="col-lg-12">
    <input type="text" maxlength="30" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" required/>
    @if ($errors->has('direccion'))
     <small class="form-text text-danger">{{ $errors->first('direccion') }}</small>
     @endif
    </div>
  </div>

<div class="form-group">
    <label for="correo" class="col-lg-3 control-label requerido">Correo</label>
    <div class="col-lg-12">
    <input type="email" maxlength="30" name="correo" id="correo" class="form-control" value="{{old('correo', $data->correo ?? '')}}" required/>
    @if ($errors->has('correo'))
     <small class="form-text text-danger">{{ $errors->first('correo') }}</small>
     @endif
    </div>
  </div>

<div class="form-group">
    <label>Tipo Sangre</label>
    <select class="form-control col-lg-12" name="tipo_sangre" id="tipo_sangre" value="{{old('tipo_sangre', $data->tipo_sangre ?? '')}}" required>
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
    <select class="form-control col-lg-12" name="eps" id="eps"  value="{{old('eps', $data->eps ?? '')}}"required>
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
    <label>Especialidad</label>
    <select class="form-control col-lg-12" name="especialidad" id="especialidad"  value="{{old('especialidad', $data->especialidad ?? '')}}"required>
      <option>Guitarra</option>
      <option>Piano</option>
      <option>Violin</option>
      <option>Teatro</option>
      <option>Recreacion</option>
      <option>Bajo</option>
      <option>Bateria</option>
    </select>
  </div>

  <div class="form-group">
    <label for="archivo" class="col-lg-3 control-label">Archivo</label>
    <div class="col-lg-5">
        <input type="file" name="archivo_up" id="archivo"    data-initial-preview="{{isset($data->imagen) ? Storage::url("archivo/profesor/$data->imagen" ) : "http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=archivo+profesor"}}" accept="image/*"/>
    </div>
</div>