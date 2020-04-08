<?php

namespace App\Models\Mode;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    //
            //
            protected $table = "mensualidad";

            protected $fillable = ['fecha','total_pago','estado'];
            protected $guarder = ['id'];
            public $timestamps =false;

  //cardinalidad (n) de matricula
   public function matriculan()
   {
       return $this->belongsTo(Matricula::class, 'mensualidad_id');
   }
}

