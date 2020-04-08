<div class="form-group">
    <label for="identificacion" class="col-lg-3 control-label requerido">Identificacion</label>
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
    <input type="text" name="apellido" id="apellido" class="form-control" value="{{old('apellido', $data->apellido ?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label for="celular" class="col-lg-3 control-label requerido">Celular</label>
    <div class="col-lg-8">
    <input type="number" name="celular" id="celular" class="form-control" value="{{old('celular', $data->celular?? '')}}" required/>
    </div>
</div>

<div class="form-group">
    <label>Ocupación</label>
    <select  class="form-control col-lg-8" name="ocupacion" id="ocupacion"  value="{{old('ocupacion', $data->ocupacion ?? '')}}"required>
      <option>Trabajador Privado</option>
      <option>Trabajador estado</option>
      <option>Ninguno</option>
      <option>Otro</option>
    </select>
  </div>

  
<div class="form-group">
    <label>Nivel academico</label>
    <select class="form-control col-lg-8" name="nivel_academico" id="nivel_academico"  value="{{old('nivel_academico', $data->nivel_academico ?? '')}}"required>
      <option>Estudiante de Bachillerato</option>
      <option>Estudiante de Primaria</option>
      <option>Tecnico</option>
      <option>Tecnologo</option>
      <option>Universitario</option>
    </select>
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
    <label for="edad" class="col-lg-3 control-label requerido">Fecha de nacimiento</label>
    <div class="col-lg-8">
    <input type="date" name="edad" id="edad" class="form-control" value="{{old('edad', $data->edad?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="direccion" class="col-lg-3 control-label requerido">Dirección</label>
    <div class="col-lg-8">
    <input type="text"  maxlength="30" name="direccion" id="direccion" class="form-control" value="{{old('direccion', $data->direccion ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="correo" class="col-lg-3 control-label requerido">Correo</label>
    <div class="col-lg-8">
    <input type="email" name="correo" id="correo" class="form-control" value="{{old('correo', $data->correo ?? '')}}" required/>
    </div>
</div>

<table width="630" cellspacing="1" cellpadding="3" border="1" bgcolor="#C0B8E3 ">
  <tr>
     <td><font color="#010006" face="arial, verdana, helvetica">
  <b>Ley a menores de edad</b>
     </font></td>
  </tr>
  <tr>
     <td bgcolor="#FFFFFF">
     <font face="arial, verdana, helvetica">
      Todo menor de edad para ingresar a un programa académico la debe realizar uno de sus padres y aceptar
      que el estudiante ingrese a la institucción.
     </font>

     {{--  <p>
        <input type="radio" name="condicion"  value="{{old('condicion', $data->condicion?? '')}}" required>Si<br>
        {{-- <input type="radio" name="empleoactual" value="mediodia">No<br> --}}
      </p> 
      <p>
        {{-- <input type="option" name="condicion"  value="{{old('condicion', $data->condicion?? '')}}" required>Si<br> --}}
        {{-- <input type="radio" name="empleoactual" value="mediodia">No<br> --}}
      <select name="condicon" value="{{old('condicion', $data->condicion ?? '')}}" >
          <option value="si" required>si</option>
          {{-- <option value="no">no</option> --}}
        </select>
      </p>
     </td>
  </tr>
  </table>
