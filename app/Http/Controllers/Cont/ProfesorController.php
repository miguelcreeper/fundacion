<?php

namespace App\Http\Controllers\Cont;
use App\Http\Requests\ValidarFormularios;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mode\Profesor;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\File;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //index -listar 
    public function index()
    {
        //
        $countProfesor = Profesor::count();
        $datas = Profesor::orderBy('id','desc')->paginate(5);
        return view('vista.profesor.index', compact('datas','countProfesor'));
        

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
        $profesor = new Profesor();
        return view('vista.profesor.crear',compact('profesor'));
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
        if ($archivo = Profesor::setArchivo($request->archivo_up))
        $request->request->add(['archivo' => $archivo]);
        Profesor::create($request->all());
        return redirect()->route('profesor')->with('mensaje', 'Profesor se creado con exito');

      
    }

    public function ver($id)
    {
        //
        $profesor=Profesor::findOrFail($id);
        return view('vista.profesor.ver', compact('profesor'));
    }



    //editar
    public function edit($id)
    {
        //
        $data = Profesor::findOrFail($id);
        return view('vista.profesor.editar', compact('data'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Buscar
    public function search(Request $request){
        $countProfesor = Profesor::count();
        $search = $request->get('search');
        $datas = Profesor::where('nombre','LIKE','%'.$search.'%')->orWhere('identificacion','LIKE','%'.$search.'%')->orderBy('id', 'DESC')->paginate(5);
        
        if(count($datas)==0){
            return redirect()->route('profesor')->withError('No existen registros de profesor con tus datos  de busqueda: ('. $search.')');
        }
        else if(empty($search)){
            return redirect()->route('profesor')->withToastInfo('Digita el Nombre o Identificación del Profesor a consultar');
        }
        else 
        // return view ('users.index')->withMessage('No Details found. Try to search again !');
        return view('vista.profesor.index',  compact('datas', 'countProfesor'));

 
    }



    //actualizar 
    public function update(ValidarFormularios $request, $id)
    {
        //Actualizar con archivo
        $profesor=Profesor::findOrFail($id);
        if ($archivo = Profesor::setArchivo($request->archivo_up,$profesor->archivo))
        $request->request->add(['archivo' => $archivo]);
        $profesor->update($request->all());
        return redirect('vista/profesor')->with('mensaje', 'Profesor actualizado con exito');
        //Actualizar sin archivo
        // Profesor::findOrFail($id)->update($request->all());
        // return redirect('vista/profesors')->with('mensaje', 'Profesor actualizado con exito');

    }

    // //eliminar o estado
    // public function destroy($id,$request)
    // {
    


    //     $datas=Profesor::find($id);
    //     if ($profesor==null){
    //         return redirect('vista/profesor')->with('mensaje', 'Profesor esta activo');
    //     }
 
    //      $datas->update(["estado=>$request"]);
    //      return redirect('vista/profesor')->with('mensaje', 'Profesor esta inactivo');




                       
    // }



}
