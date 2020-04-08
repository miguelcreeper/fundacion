<?php

namespace App\Http\Controllers\Cont;
use App\Http\Controllers\Controller;
use App\Models\Mode\Estado_Curso;
use Illuminate\Http\Request;

class Estado_CursoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $datas = Estado_Curso::orderBy('id')->get();
        return view('vista.estado_curso.index', compact('datas'));

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
        return view('vista.estado_curso.crear');
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
        
       
        Estado_Curso::create($request->all());
        return redirect('vista/estado_curso')->with('mensaje', 'Estado_Curso se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $data = Estado_Curso::findOrFail($id);
        return view('vista.estado_curso.editar', compact('data'));

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
        Estado_Curso::findOrFail($id)->update($request->all());
        return redirect('vista/estado_curso')->with('mensaje', 'Estado_Curso actualizado con exito');
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
            if (Estado_Curso::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Estado_Curso::findOrFail($id);
        $data->delete();
        return redirect()->route('estado_curso')->with('El registro fue eliminado');


    }
}
