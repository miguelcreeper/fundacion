<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAcudiente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudiente', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('identificacion'); 
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->unsignedInteger('celular');
            $table->enum('ocupacion', ['Trabajador Privado','Trabajador estado','Ninguna','otro']); 
            $table->enum('nivel_academico', ['Estudiante de Bachillerato', 'Estudiante de Primaria', 'Tecnico', 'Tecnologo','Universitario','Ninguno','otro']); 
            $table->enum('tipo_sangre', ['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']);
            $table->date('edad');
            $table->string('direccion', 100);
            $table->string('correo', 100);
            $table->enum('condicion',['si','no']);
            $table->boolean('estado')->default(1);
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acudiente');
    }
}
