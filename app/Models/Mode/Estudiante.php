<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class Estudiante extends Model
{
 //atributo para llamar o identificar la tabla 
    protected $table ="estudiante";
        //la tabla de la base de datos
    protected $fillable =['identificacion','nombre','apellido','tipo_identificacion','celular','correo','tipo_sangre','eps','edad','direccion','barrio','ocupacion','archivo','observacion','estado','acudiente_id'];
            //campos que no deja modificar 
    protected $guarder =['id'];
        //para usarlos o no usarlos de la base de datos se pone false o true 
   public $timestamps =false;

   //cardinalidad (n) de acudiente
   public function acudienten()
   {
       return $this->belongsTo(Acudiente::class, 'acudiente_id');
   }

     //cardinalidad (1) de estudiante
     public function matricula1()
    {
    return $this->hasOne(Matricula::class, 'estudiante_id');
    }

    public static function setArchivo($archivo, $actual = false){
        if ($archivo) {
            if ($actual) {
                Storage::disk('public')->delete("archivo/estudiante/$actual");
            }
            $imageName = Str::random(20) . '.jpg';
            $imagen = Image::make($archivo)->encode('jpg', 75);
            $imagen->resize(530, 470, function ($constraint) {
                $constraint->upsize();
            });
            Storage::disk('public')->put("archivo/estudiante/$imageName", $imagen->stream());
            return $imageName;
        } else {
            return false;
        }
    }

}
