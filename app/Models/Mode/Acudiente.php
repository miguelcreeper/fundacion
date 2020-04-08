<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Acudiente extends Model
{
    //
     //atributo para llamar o identificar la tabla 
protected $table ="acudiente";
     //la tabla de la base de datos
protected $fillable =['identificacion','nombre','apellido','celular','ocupacion','nivel_academico','tipo_sangre','edad','direccion','correo','condicion','estado'];
         //campos que no deja modificar 
protected $guarder =['id'];
     //para usarlos o no usarlos de la base de datos se pone false o true 
public $timestamps =false;


    
//cardinalidad (1) de estudiante
public function estudiante1()
{
    return $this->hasOne(Estudiante::class, 'acudiente_id');
}

}
