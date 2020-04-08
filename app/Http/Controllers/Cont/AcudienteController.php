<?php

namespace App\Http\Controllers\Cont;
use App\Http\Requests\ValidarFormularios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Acudiente;


class AcudienteController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $countacudiente = Acudiente::count();
        $datas = Acudiente::orderBy('id','desc')->paginate(5);
        return view('vista.acudiente.index', compact('datas','countacudiente'));

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
        $acudiente = new Acudiente();
        return view('vista.acudiente.crear',compact('acudiente'));;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //guardar
    public function store(ValidarFormularios $request)
    {
        
        Acudiente::create($request->all());
        return redirect('vista/acudiente')->with('mensaje', 'Acudiente se creado con exito');
    }

       
    //editar
    public function edit($id)
    {
        //
        $data = Acudiente::findOrFail($id);
        return view('vista.acudiente.editar', compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//Buscar
    public function search (Request $request){
    $countacudiente = Acudiente::count();
    $search = $request->get('search');
    $datas = acudiente::where('nombre','LIKE','%'.$search.'%')->orWhere('identificacion','LIKE','%'.$search.'%')->orderBy('id', 'DESC')->paginate(5);
    
    if(count($datas)==0){
        return redirect()->route('acudiente')->withError('No existen registros de acudiente con tus datos  de busqueda: ('. $search.')');
    }
    else if(empty($search)){
        return redirect()->route('acudiente')->withToastInfo('Digita el Nombre o Identificación del acudiente a consultar');
    }
    else 
    // return view ('users.index')->withMessage('No Details found. Try to search again !');
    return view('vista.acudiente.index',  compact('datas', 'countacudiente'));


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
        Acudiente::findOrFail($id)->update($request->all());
        return redirect('vista/acudiente')->with('mensaje', 'Acudiente actualizado con exito');
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
            if (Acudiente::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Acudiente::findOrFail($id);
        $data->delete();
        return redirect()->route('acudiente')->with('El registro fue eliminado');


    }
    
}
