
<div class="form-group">
    <label for="nombre" class="col-lg-3 control-label requerido">Nombre</label>
    <div class="col-lg-8">
    <input type="text" maxlength="30" name="nombre" id="nombre" class="form-control" value="{{old('nombre', $data->nombre ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="costo" class="col-lg-3 control-label requerido">Costo</label>
    <div class="col-lg-8">
    <input type="float" maxlength="30" name="costo" id="costo" class="form-control" value="{{old('costo', $data->costo ?? '')}}" required/>
    </div>
</div>


<div class="form-group">
    <label>Semestre</label>
    <select class="form-control col-lg-8" name="tipo_identificacion" id="tipo_identificacion"  value="{{old('tipo_identificacion', $data->tipo_identificacion ?? '')}}"required>
      <option>I</option>
      <option>II</option>
      <option>III</option>
      <option>IV</option>
      <option>V</option>}
      <option>VI</option>
    </select>
  </div>




