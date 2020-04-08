<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEstudiante extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('identificacion'); 
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->enum('tipo_identificacion', ['Cedula de ciudadania', 'Tarjeta de identidad', 'Documento extranjero']);
            $table->unsignedInteger('celular');
            $table->string('correo', 100);
            $table->enum('tipo_sangre', ['O+', 'O-', 'A+', 'A-', 'B+', 'B-', 'AB+', 'AB-']);
            $table->enum('eps', ['Salud Colmena', 'Salud Total', 'Cafesalud', 'Compensar', 'Colseguros', 'Comfenalco Valle', 'Saludcoop', 'Cruz Blanca', 'Coomeva', 'Sanitas S.A', 'otro']);
            $table->date('edad');
            $table->string('direccion', 100);
            $table->string('barrio', 20);
            $table->set('ocupacion', ['Estudiante de Bachillerato', 'Estudiante de Primaria', 'Trabajador', 'Tecnico', 'Tecnologo']); 
            $table->string('archivo',100);
            $table->string('observacion',100)->nullable();
            $table->boolean('estado')->default(1);
            $table->unsignedBigInteger('acudiente_id');
            $table->foreign('acudiente_id')->references('id')->on('acudiente')->onDelete('restrict')->onUpdate('restrict')->nullable();

            $table->timestamps();
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
        Schema::dropIfExists('estudiante');
    }
}
