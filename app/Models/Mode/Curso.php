<?php

namespace App\Models\Mode;

use App\Models\Mode\Profesor;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "curso";
    protected $fillable = ['salon','sede', 'fecha_inicio', 'fecha_fin', 'cupos_maximos','estado'];
    protected $guarder = ['id'];
    public $timestamps =false;

   //cardinalidad (n) de profesor 
   public function profesorn()
   {
       return $this->belongsTo(Profesor::class, 'profesor_id');
   }

   //cardinalidad (n) de tipo curso 
   public function tipo_curson()
   {
       return $this->belongsTo(Tipo_curso::class, 'tipo_curso_id');
   }
   //cardinalidad (n) de jornada 
   public function Jornadan()
   {
       return $this->belongsTo(Jornada::class, 'jornada_id');
   }
   //cardinalidad (n) de estado curso 
   public function estado_curson()
   {
       return $this->belongsTo(Estado_curso::class, 'estado_curso_id');
   }

   //cardinalidad (1) de matricula
    public function matricula1()
     {
    return $this->hasOne(Matricula::class, 'curso_id');
     }
}
