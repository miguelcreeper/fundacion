<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaMatricula extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('estado')->default(1);          

            $table->unsignedBigInteger('curso_id');
            $table->foreign('curso_id')->references('id')->on('curso')->onUpdate('restrict')->onDelete('restrict');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')->references('id')->on('estudiante')->onUpdate('restrict')->onDelete('restrict');

            
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
        Schema::dropIfExists('matricula');
    }
}
