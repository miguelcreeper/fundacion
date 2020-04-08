<?php

namespace App\Http\Controllers\Cont;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Curso;
use App\Models\Mode\Estudiante;
use App\Models\Mode\Matricula;

class MatriculaController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        //
        $countMatricula= Matricula::count();
        $datas = Matricula::with('estudianten','curson')->orderBy('id','desc')->paginate(5);
        return view('vista.matricula.index', compact('datas','countMatricula'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //crear 
    public function create()
    {
        //
        $curso1=Curso::all();
        $estudiante1=Estudiante::all();
        $matricula = new Matricula();
        return view('vista.matricula.crear', compact('matricula', 'estudiante1','curso1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //guardar
    public function store(Request $request)
    {
        
       
        Matricula::create($request->all());
        return redirect('vista/matricula')->with('mensaje', 'Matricula se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $curso1=Curso::all();
        $estudiante1=Estudiante::all();
        $data = Matricula::findOrFail($id);
        return view('vista.matricula.editar', compact('data','estudiante1','curso1'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Buscar
    public function search(Request $request){


    }


     //mostrar 
     public function show($id)
    {
            //
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //actualizar 
    public function update(Request $request, $id)
    {
        //
        Matricula::findOrFail($id)->update($request->all());
        return redirect('vista/matricula')->with('mensaje', 'Matricula actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //eliminar
    public function destroy($id)
    {
        //
       /*  if ($request->ajax()) {
            if (Matricula::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Matricula::findOrFail($id);
        $data->delete();
        return redirect()->route('matricula')->with('El registro fue eliminado');


    }
}
