<?php

namespace App\Http\Controllers;

use App\Mail\DemoEmail;
use App\User;
use App\usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = User::orderBy('id','DESC')->paginate(5);
       $articles = User::orderBy('id', 'DESC')->paginate(5);

        return view('register')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosUsuario=request()->all();

        $datosUsuario=request()->except('_token');

function contraseña_random($length = 6){

    $charset = "hfkasjdfhavnkjayewpwqpkñlfas´()/&$%$";
    $contraseña = "";
    for($i=0;$i<$length;$i++){

        $rand = rand() % strlen($charset);
        $contraseña = substr($charset, $rand, 10);
    }
    return $contraseña;

    

}
       // $datosUsuario->contraseña_random();


        //return response()->json($datosUsuario);
        
        //return response()->json($datosUsuario);

        User::insert($datosUsuario);

       return redirect('register');
        
        

       Mail::to('Yesid12pipe@gmail.com')->send(new DemoEmail);

       return 'Mensaje enviado';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      User::destroy($id);

      return redirect('register'); 
    }
}
