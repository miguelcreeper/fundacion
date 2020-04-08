<?php

namespace App\Http\Controllers\Cont;
use App\Http\Controllers\Controller;
use App\Models\Mode\Curso;
use App\Models\Mode\Estado_Curso;
use App\Models\Mode\Jornada;
use App\Models\Mode\Profesor;
use App\Models\Mode\Tipo_Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $countCurso = Curso::count();
        $datas = Curso::with(' tipo_curson','profesorn','Jornadan','estado_curson')->orderBy('id','desc')->paginate(5);
        return view('vista.curso.index', compact('datas','countCurso'));

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
        $estado1=Estado_Curso::all();
        $tipo1=Tipo_Curso::all();
        $jornada1=Jornada::all();
        $profesor1=Profesor::all();
        $curso = new Curso();
        return view('vista.curso.crear', compact('curso', 'estado1','tipo1','jornada1','profesor1'));
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
        
       
        Curso::create($request->all());
        return redirect('vista/curso')->with('mensaje', 'Curso se creado con exito');
    }


    //editar
    public function edit($id)
    {
        //
        $estado1=Estado_Curso::all();
        $tipo1=Tipo_Curso::all();
        $jornada1=Jornada::all();
        $profesor1=Profesor::all();
        $data = Curso::findOrFail($id);
        return view('vista.curso.editar', compact('data', 'estado1','tipo1','jornada1','profesor1'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Buscar
    //Buscar
    public function search(Request $request){
        $countCurso = Curso::count();
        $search = $request->get('search');
        $datas = Curso::where('id','LIKE','%'.$search.'%')->orWhere('salon','LIKE','%'.$search.'%')->orderBy('id', 'DESC')->paginate(5);
        
        if(count($datas)==0){
            return redirect()->route('curso')->withError('No existen registros de curso con tus datos  de busqueda: ('. $search.')');
        }
        else if(empty($search)){
            return redirect()->route('curso')->withToastInfo('Digita el Nombre o Identificación del curso a consultar');
        }
        else 
        // return view ('users.index')->withMessage('No Details found. Try to search again !');
        return view('vista.curso.index',  compact('datas', 'countCurso'));

 
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
        Curso::findOrFail($id)->update($request->all());
        return redirect('vista/curso')->with('mensaje', 'Curso actualizado con exito');
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
            if (Curso::destroy($id)) {
                return response()->json(['mensaje' => 'ok']);
            } else {
                return response()->json(['mensaje' => 'ng']);
            }
        } else {
            abort(404);
        } */
        $data = Curso::findOrFail($id);
        $data->delete();
        return redirect()->route('curso')->with('El registro fue eliminado');


    }
}
