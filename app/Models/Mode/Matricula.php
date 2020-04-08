<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = "matricula";

    protected $fillable = ['estado'];
    protected $guarder = ['id'];
    public $timestamps =false;

   //cardinalidad (n) de estudiante 
   public function estudianten()
   {
       return $this->belongsTo(Estudiante::class, 'estudiante_id');
   }
   
  
   //cardinalidad (n) de curso
   public function curson()
   {
       return $this->belongsTo(Curso::class, 'curso_id');
   }

      //cardinalidad (1) de mensualidad
      public function mensualidad1()
      {
     return $this->hasOne(Mensualidad::class, 'mensualidad_id');
      }
}
