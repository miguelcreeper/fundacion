<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Ruta de template o donde se muestra 
Route::get('/','InicioControlle@index');

//GENERAL DE ADMINISTRADOR
Route::group(['prefix' => 'vista','namespace'=>'Cont'], function () {
    //Profesor
    Route::get('profesor', 'ProfesorController@index')->name('profesor');
    Route::get('profesor/crear', 'ProfesorController@create')->name('crear_profesor');
    Route::post('profesor', 'ProfesorController@store')->name('registrar_profesor');
    Route::get('profesor/{id}/editar', 'ProfesorController@edit')->name('editar_profesor');
    Route::put('profesor/{id}', 'ProfesorController@update')->name('actualizar_profesor');
    // Route::get('profesor/{id}/{estado}', 'ProfesorController@destroy')->name('eliminar_profesor');
    Route::post('profesor/{id}', 'ProfesorController@ver')->name('ver_profesor');
    Route::get('Profesor/buscar', 'ProfesorController@search')->name('buscar_profesor');

    Route::get('curso', 'CursoController@index')->name('curso');
    Route::get('curso/crear', 'CursoController@create')->name('crear_curso');
    Route::post('curso', 'CursoController@store')->name('registrar_curso');
    Route::get('curso/{id}/editar', 'CursoController@edit')->name('editar_curso');
    Route::put('curso/{id}', 'CursoController@update')->name('actualizar_curso');
    Route::delete('curso/{id}', 'CursoController@destroy')->name('eliminar_curso');

    Route::get('estado_curso', 'Estado_cursoController@index')->name('estado_curso');
    Route::get('estado_curso/crear', 'Estado_cursoController@create')->name('crear_estado_curso');
    Route::post('estado_curso', 'Estado_cursoController@store')->name('registrar_estado_curso');
    Route::get('estado_curso/{id}/editar', 'Estado_cursoController@edit')->name('editar_estado_curso');
    Route::put('estado_curso/{id}', 'Estado_cursoController@update')->name('actualizar_estado_curso');
    Route::delete('estado_curso/{id}', 'Estado_cursoController@destroy')->name('eliminar_estado_curso');


    Route::get('estudiante', 'EstudianteController@index')->name('estudiante');
    Route::get('estudiante/crear', 'EstudianteController@create')->name('crear_estudiante');
    Route::post('estudiante', 'EstudianteController@store')->name('registrar_estudiante');
    Route::get('estudiante/{id}/editar', 'EstudianteController@edit')->name('editar_estudiante');
    Route::put('estudiante/{id}', 'EstudianteController@update')->name('actualizar_estudiante');
    Route::delete('estudiante/{id}', 'EstudianteController@destroy')->name('eliminar_estudiante');
    Route::post('estudiante/{id}', 'EstudianteController@ver')->name('ver_estudiante');
    Route::get('estudiante/buscar', 'EstudianteController@search')->name('buscar_estudiante');




    Route::get('jornada', 'JornadaController@index')->name('jornada');
    Route::get('jornada/crear', 'JornadaController@create')->name('crear_jornada');
    Route::post('jornada', 'JornadaController@store')->name('registrar_jornada');
    Route::get('jornada/{id}/editar', 'JornadaController@edit')->name('editar_jornada');
    Route::put('jornada/{id}', 'JornadaController@update')->name('actualizar_jornada');
    Route::delete('jornada/{id}', 'JornadaController@destroy')->name('eliminar_jornada');

    Route::get('tipo_curso', 'Tipo_cursoController@index')->name('tipo_curso');
    Route::get('tipo_curso/crear', 'Tipo_cursoController@create')->name('crear_tipo_curso');
    Route::post('tipo_curso', 'Tipo_cursoController@store')->name('registrar_tipo_curso');
    Route::get('tipo_curso/{id}/editar', 'Tipo_cursoController@edit')->name('editar_tipo_curso');
    Route::put('tipo_curso/{id}', 'Tipo_cursoController@update')->name('actualizar_tipo_curso');
    Route::delete('tipo_curso/{id}', 'Tipo_cursoController@destroy')->name('eliminar_tipo_curso');
   
    Route::get('acudiente', 'AcudienteController@index')->name('acudiente');
    Route::get('acudiente/crear', 'AcudienteController@create')->name('crear_acudiente');
    Route::post('acudiente', 'AcudienteController@store')->name('registrar_acudiente');
    Route::get('acudiente/{id}/editar', 'AcudienteController@edit')->name('editar_acudiente');
    Route::put('acudiente/{id}', 'AcudienteController@update')->name('actualizar_acudiente');
    Route::delete('acudiente/{id}', 'AcudienteController@destroy')->name('eliminar_acudiente');
    Route::get('acudiente/buscar', 'AcudienteController@search')->name('buscar_acudiente');

    Route::get('matricula', 'MatriculaController@index')->name('matricula');
    Route::get('matricula/crear', 'MatriculaController@create')->name('crear_matricula');
    Route::post('matricula', 'MatriculaController@store')->name('registrar_matricula');
    Route::get('matricula/{id}/editar', 'MatriculaController@edit')->name('editar_matricula');
    Route::put('matricula/{id}', 'MatriculaController@update')->name('actualizar_matricula');
    Route::delete('matricula/{id}', 'MatriculaController@destroy')->name('eliminar_matricula');
  
    Route::get('mensualidad', 'MensualidadController@index')->name('mensualidad');
    Route::get('mensualidad/crear', 'MensualidadController@create')->name('crear_mensualidad');
    Route::post('mensualidad', 'MensualidadController@store')->name('registrar_mensualidad');
    Route::get('mensualidad/{id}/editar', 'MensualidadController@edit')->name('editar_mensualidad');
    Route::put('mensualidad/{id}', 'MensualidadController@update')->name('actualizar_mensualidad');
    Route::delete('mensualidad/{id}', 'MensualidadController@destroy')->name('eliminar_mensualidad');
   
   
   });
   
  
   Route::get('login','LoginController@index')->name('login');
   Route::POST('login','LoginController@login')->name('login_d');
   Route::post('Register','UsersController@store')->name('login_c');
   Route::get('register','UsersController@index')->name('register');

