<?php

namespace App\Http\Controllers\Cont;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Matricula;
use App\Models\Mode\Mensualidad;

class MensualidadController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $countMensualidad = Mensualidad::count();
        $datas = Mensualidad::with('matriculan')->orderBy('id','desc')->paginate(5);
        return view('vista.mensualidad.index', compact('datas','countMensualidad'));

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
        $matricula1 =Matricula::all();
        $mensualidad = new Mensualidad();
        return view('vista.mensualidad.crear', compact('mensualidad', 'matricula1'));
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
        
       
        Mensualidad::create($request->all());
        return redirect('vista/mensualidad')->with('mensaje', 'Mensualidad se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $matricula1 =Matricula::all();
        $data = Mensualidad::findOrFail($id);
        return view('vista.mensualidad.editar', compact('data','matricula1'));

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
        Mensualidad::findOrFail($id)->update($request->all());
        return redirect('vista/mensualidad')->with('mensaje', 'Mensualidad actualizado con exito');
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
            if (Mensualidad::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data =Mensualidad::findOrFail($id);
        $data->delete();
        return redirect()->route('mensualidad')->with('El registro fue eliminado');


    }

}
