<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Tipo_Curso extends Model
{
    protected $table = "tipo_curso";
    protected $fillable = ['nombre', 'costo', 'semestre'];
    protected $guarder = ['id'];
    public $timestamps =false;

//cardinalidad (1) de curso
public function curso1()
{
    return $this->hasOne(Curso::class, 'tipo_curso_id');
}
}
