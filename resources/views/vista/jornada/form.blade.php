
<div class="form-group">
    <label for="descripcion" class="col-lg-3 control-label requerido">Descripción</label>
    <div class="col-lg-8">
    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion', $data->descripcion ?? '')}}" required/>
    </div>
</div>
<div class="form-group">
    <label for="Horai" class="col-lg-3 control-label requerido">Hora inicio</label>
    <div class="col-lg-8">
    <input type="time" name="Horai" id="Horai" class="form-control" value="{{old('Horai', $data->hora_inicio?? '')}}" required/>
</div>
</div>

{{-- 
<div class="form-group">
    <label for="Horai" class="col-lg-3 control-label requerido">Hora inicio</label>
    <div class="col-lg-8">
    <input type="time" name="limitetiempo" list="listalimitestiempo" step="0.001" value="{{old('Horai', $data->hora_inicio?? '')}}" required/>
</div>
</div>
  
  <datalist id="listalimitestiempo">
  
    <option value="06:40">
  
    <option value="08:24">
  
    <option value="12:31:30">
  
    <option value="23:59:59.999">
  
  </datalist> --}}

<div class="form-group">
    <label for="Horaf" class="col-lg-3 control-label requerido">Hora fin</label>
    <div class="col-lg-8">
    <input type="time" name="Horaf" id="Horaf" class="form-control" value="{{old('Horaf', $data->hora_fin?? '')}}" required/>
    </div>
</div>

