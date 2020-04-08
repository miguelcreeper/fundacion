<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App;
use App\User;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Isset_;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;



class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    

      function login(Request $request){
            $this->validate($request, [
    
                    'correo'        => 'required|email',
                    'contraseña'    => 'required|alphaNum|min:3'
    
            ]);
    
            $email = array(
                'correo' => $request->get('correo'),
                
            );
$password = array(
            'contraseña' =>$request->get('contraseña')
    
);
            if (User::attempt(['correo' => $email, 'contraseña' => $password])){
                return view('inicio');
            }
    
            else{
    
                return back()->with('error','Wrong Login Details');
    
            }
    
        }
    


        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('signed')->only('verify');
            $this->middleware('throttle:6,1')->only('verify', 'resend');
        }
    }

    // public static function LoginUsingId(){

    //         $correo = User::select('select * from users where id = ?', [1]);

    //         $contraseña = User::select('select * from users where contraseña = ?', [1]);

    // }

