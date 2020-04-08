<?php

namespace App\Http\Controllers\Cont;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Jornada;

class JornadaController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Jornada::orderBy('id')->get();
        return view('vista.jornada.index', compact('datas'));

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
        return view('vista.jornada.crear');
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
        
       
        Jornada::create($request->all());
        return redirect('vista/jornada')->with('mensaje', 'Jornada se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $data = Jornada::findOrFail($id);
        return view('vista.jornada.editar', compact('data'));

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
        Jornada::findOrFail($id)->update($request->all());
        return redirect('vista/jornada')->with('mensaje', 'Jornada actualizado con exito');
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
            if (Jornada::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Jornada::findOrFail($id);
        $data->delete();
        return redirect()->route('jornada')->with('El registro fue eliminado');


    }

}
