<?php

namespace App\Http\Controllers\Cont;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Tipo_Curso;

class Tipo_CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Tipo_Curso::orderBy('id')->get();
        return view('vista.tipo_curso.index', compact('datas'));

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
        return view('vista.tipo_curso.crear');
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
        
       
        Tipo_Curso::create($request->all());
        return redirect('vista/tipo_curso')->with('mensaje', 'Tipo_Curso se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $data = Tipo_Curso::findOrFail($id);
        return view('vista.tipo_curso.editar', compact('data'));

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
        Tipo_Curso::findOrFail($id)->update($request->all());
        return redirect('vista/tipo_curso')->with('mensaje', 'Tipo_Curso actualizado con exito');
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
            if (Tipo_Curso::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Tipo_Curso::findOrFail($id);
        $data->delete();
        return redirect()->route('tipo_curso')->with('El registro fue eliminado');


    }
}
