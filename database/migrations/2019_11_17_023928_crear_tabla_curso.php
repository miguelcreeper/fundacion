<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('salon', 10);
            $table->string('sede', 20);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedInteger('cupos_maximos');
            $table->unsignedBigInteger('profesor_id');
            $table->foreign('profesor_id')->references('id')->on('profesor')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedBigInteger('tipo_curso_id');
            $table->foreign('tipo_curso_id')->references('id')->on('tipo_curso')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedBigInteger('jornada_id');
            $table->foreign('jornada_id')->references('id')->on('jornada')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedBigInteger('estado_curso_id');
            $table->foreign('estado_curso_id')->references('id')->on('estado_curso')->onUpdate('restrict')->onDelete('restrict');
            $table->boolean('estado')->default(1);
            
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
