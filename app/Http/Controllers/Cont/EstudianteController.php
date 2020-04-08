<?php

namespace App\Http\Controllers\Cont;
use App\Http\Requests\ValidarFormularios;
use App\Http\Controllers\Controller;
use App\Models\Mode\Acudiente;
use App\Models\Mode\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $countEstudiante = Estudiante::count();
        $datas = Estudiante::with('acudienten')->orderBy('id','desc')->paginate(5);
        return view('vista.estudiante.index', compact('datas','countEstudiante'));

        // $countEstudiante = Estudiante::count();
        // $datas=Estudiante::nombre($request->get('nombre'))->acudiente($request->get('acudiente_id'))->orderBy('id','DESC')->paginate(2);
		// return view('vista.estudiante.index', compact('datas','countEstudiante'));
   
        

 
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
        $acudienten1 =Acudiente::all();
        $estudiante = new Estudiante();
        return view('vista.estudiante.crear', compact('estudiante', 'acudienten1'));

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
       //Subir archivo 
       if ($archivo = Estudiante::setArchivo($request->archivo_up))
       $request->request->add(['archivo' => $archivo]);
       Estudiante::create($request->all());
       return redirect()->route('estudiante')->with('mensaje', 'Estudiante se creado con exito');

    }
    public function ver($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('vista.estudiante.ver', compact('estudiante'));
    }


    //editar
    public function edit($id)
    {
        //
        $acudienten1 =Acudiente::all();
        $data = Estudiante::findOrFail($id);
        return view('vista.estudiante.editar', compact('data','acudienten1'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Buscar
    public function search(Request $request){
        $countEstudiante = Estudiante::count();
        $search = $request->get('search');
        $datas = Estudiante::where('nombre','LIKE','%'.$search.'%')->orWhere('identificacion','LIKE','%'.$search.'%')->orderBy('id', 'DESC')->paginate(5);
        
        if(count($datas)==0){
            return redirect()->route('estudiante')->withError('No existen registros de estudiante con tus datos  de busqueda: ('. $search.')');
        }
        else if(empty($search)){
            return redirect()->route('estudiante')->withToastInfo('Digita el Nombre o Identificación del estudiante a consultar');
        }
        else 
        // return view ('users.index')->withMessage('No Details found. Try to search again !');
        return view('vista.estudiante.index',  compact('datas', 'countEstudiante'));

 
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
    public function update(ValidarFormularios $request, $id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        if ($archivo = Estudiante::setArchivo($request->archivo_up,$estudiante->archivo))
        $request->request->add(['archivo' => $archivo]);
        $estudiante->update($request->all());
        return redirect('vista/estudiante')->with('mensaje', 'Estudiante actualizado con exito');
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
            if (Estudiante::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Estudiante::findOrFail($id);
        $data->delete();
        return redirect()->route('estudiante')->with('El registro fue eliminado');


    }
}
