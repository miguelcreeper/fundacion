{{--Llave foreign key de estudiante  --}}
<div class="form-group ">
    <label for="estudiante_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Estudiante</label>
    <div class="col-sm-12 col-md-7">
        <select name="estudiante_id" id="estudiante_id" class="form-control">
             @foreach ($estudiante1 as $estudianten) 
            <option value="{{$estudianten->id}}">{{$estudianten->nombre}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>

  {{--Llave foreign key de curso  --}}
<div class="form-group ">
    <label for="curso_id" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Curso</label>
    <div class="col-sm-12 col-md-7">
        <select name="curso_id" id="curso_id" class="form-control">
             @foreach ($curso1 as $curson) 
            <option value="{{$curson->id}}">{{$curson->salon}}</option> 
           {{-- <option value="{{$estudiante1->acudienten->id}}">{{$estudiante1->acudienten->nombre}}</option>--}}
            @endforeach 
        </select>
    </div>
  </div>