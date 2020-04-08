<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaProfesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('identificacion'); 
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->unsignedInteger('celular');
            $table->date('edad');
            $table->string('direccion', 100);
            $table->string('correo', 100);
            $table->enum('tipo_sangre', ['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']);
            $table->enum('eps', ['Salud Colmena', 'Salud Total', 'Cafesalud', 'Compensar', 'Colseguros', 'Comfenalco Valle', 'Saludcoop', 'Cruz Blanca', 'Coomeva', 'Sanitas S.A', 'otro']);
            $table->set('especialidad', ['Guitarra', 'Piano', 'Violin', 'Teatro', 'Recreacion', 'Bajo', 'Bateria']);
            $table->string('archivo',100);
            $table->string('observacion',100)->nullable();
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
        Schema::dropIfExists('profesor');
    }
}
