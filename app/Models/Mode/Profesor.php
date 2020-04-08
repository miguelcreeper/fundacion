<?php

namespace App\Models\Mode;

use App\Models\Mode\Curso;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class Profesor extends Model
{
//atributo para llamar o identificar la tabla 
 protected $table ="profesor";
 //la tabla de la base de datos
 protected $fillable =['identificacion','nombre','apellido','celular','edad','direccion','correo','tipo_sangre','eps','especialidad','archivo','observacion','estado'];
 //campos que no deja modificar 
 protected $guarder =['id'];
  //para usarlos o no usarlos de la base de datos se pone false o true 
public $timestamps =false; 

// private $state = ['Inactivo', 'Activo'];

// public function getUsuEstadoAttribute($value)
// {
//     return $this->state[$value];

// }

//cardinalidad (1) de curso
public function curso1()
{
    return $this->hasOne(Curso::class, 'profesor_id');
}
public static function setArchivo($archivo, $actual = false){
    if ($archivo) {
        if ($actual) {
            Storage::disk('public')->delete("archivo/profesor/$actual");
        }
        $imageName = Str::random(20) . '.jpg';
        $imagen = Image::make($archivo)->encode('jpg', 75);
        $imagen->resize(530, 470, function ($constraint) {
            $constraint->upsize();
        });
        Storage::disk('public')->put("archivo/profesor/$imageName", $imagen->stream());
        return $imageName;
    } else {
        return false;
    }
}

}