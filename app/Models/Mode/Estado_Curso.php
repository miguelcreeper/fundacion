<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Estado_Curso extends Model
{
        //
        protected $table = "estado_curso";

        protected $fillable = ['nombre'];
        protected $guarder = ['id'];
        public $timestamps =false;
    
//cardinalidad (1) de curso
public function curso1()
{
    return $this->hasOne(Curso::class, 'estado_curso_id');
}
}
