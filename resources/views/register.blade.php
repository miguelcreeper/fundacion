<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Registra Usuario</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="statics/css/app.min.css">
  <link rel="stylesheet" href="statics/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="statics/css/style.css">
  <link rel="stylesheet" href="statics/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="statics/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='statics/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Registrar Usuario</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login_c')}}">
                {{ csrf_field() }}
                  
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nombre">Primer Nombre</label>
                      <input id="nombre" type="text" class="form-control" name="nombre" autofocus required>
                    </div>
                    <div class="form-group col-6">
                      <label for="apellido">Primer Apellido</label>
                      <input id="apellido" type="text" class="form-control" name="apellido" >
                    </div>
                    <div class="form-group col-12">
                      <label for="rol">Rol</label>
                      <select name="rol" id="rol" class="form-control" required>
                       
                        
                        <option value="administrador">Administrador</option>
                        <option value="secretaria">Secretaria</option>
                      </select>
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input id="correo" type="email" class="form-control" name="correo" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  
                  <div class="row">
                   <div class="form-group col-6">
                    <!-- <label for="password" class="d-block">Contraseña</label> -->
                      <input id="contraseña" type="hidden" class="form-control pwstrength" data-indicator="pwindicator"
                        name="contraseña" value="fadfa4f56f78a94fa"required>  
                       <div id="pwindicator" class="pwindicator"> 
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                   </div> 

                     <div class="form-group col-6">
                     <!--  <label for="password_confirmation" class="d-block">Confirmar Contraseña</label>-->
                      <input id="contraseña_confirmation" type="hidden" class="form-control" name="contraseña_confirmation"  value="fadfa4f56f78a94fa"  required>
         <!--              <svg aria-hidden="true" class="stUf5b" fill="currentColor" focusable="false" width="24px" height="24px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M10.58,7.25l1.56,1.56c1.38,0.07,2.47,1.17,2.54,2.54l1.56,1.56C16.4,12.47,16.5,12,16.5,11.5C16.5,9.02,14.48,7,12,7 C11.5,7,11.03,7.1,10.58,7.25z"></path><path d="M12,6c3.79,0,7.17,2.13,8.82,5.5c-0.64,1.32-1.56,2.44-2.66,3.33l1.42,1.42c1.51-1.26,2.7-2.89,3.43-4.74 C21.27,7.11,17,4,12,4c-1.4,0-2.73,0.25-3.98,0.7L9.63,6.3C10.4,6.12,11.19,6,12,6z"></path><path d="M16.43,15.93l-1.25-1.25l-1.27-1.27l-3.82-3.82L8.82,8.32L7.57,7.07L6.09,5.59L3.31,2.81L1.89,4.22l2.53,2.53 C2.92,8.02,1.73,9.64,1,11.5C2.73,15.89,7,19,12,19c1.4,0,2.73-0.25,3.98-0.7l4.3,4.3l1.41-1.41l-3.78-3.78L16.43,15.93z M11.86,14.19c-1.38-0.07-2.47-1.17-2.54-2.54L11.86,14.19z M12,17c-3.79,0-7.17-2.13-8.82-5.5c0.64-1.32,1.56-2.44,2.66-3.33 l1.91,1.91C7.6,10.53,7.5,11,7.5,11.5c0,2.48,2.02,4.5,4.5,4.5c0.5,0,0.97-0.1,1.42-0.25l0.95,0.95C13.6,16.88,12.81,17,12,17z"></path></svg>
               -->   </div>   
                      </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
              
<script>
                  function contraseña_random($length = 6){

$charset = "hfkasjdfhavnkjayewpwqpkñlfas´()/&$%$";
$contraseña = "";
for($i=0;$i<$length;$i++){

    $rand = rand() % strlen($charset);
    $contraseña = substr($charset, $rand, 10);
}
return $contraseña;

echo (contraseña_random(10));

}


</script>
<div class="form-group">

                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                   
              
                  </div> 
                </form>
                
                    </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.html">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    <table class="table table-striped table-dark ">
      <thead >
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Rol</th>
          <th scope="col">Correo</th>
          
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
      @foreach($data as $usuario)
        <tr>
          
          <th scope="row">{{ $loop->iteration}}</th>
          <td>{{ $usuario->nombre}}</td>
          <td>{{ $usuario->apellido}}</td>
          <td>{{ $usuario->rol}}</td>
          <td>{{ $usuario->correo}}</td>
          
          <td> <form method="post" action="{{ url('/register/'.$usuario->id)}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
            
          </form>
        </td>
        </tr>
      @endforeach
      </tbody>
    </table>


<button href="{{route('login')}}">jfdskl</button>
  <!-- General JS Scripts -->
  <script src="statics/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="statics/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="statics/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="statics/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="statics/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="statics/js/custom.js"></script>
</body>


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>


<?php 


use Illuminate\Database\Seeder;

// function regitrar(){


//     $nombre = isset(POST['nombre']);
//     $rol = isset(POST['rol']);
//     $contraseña = isset(POST['contraseña']);
//     $correo = isset(POST['correo']);
//     $contraseña2 = isset(POST['contraseña2']);

  

//     $query = "INSERT INTO user (nombre, correo, contraseña, rol, remeber_token) VALUES ($nombre, $correo, $contraseña, $rol, $contraseña2);";
    
    


// }


?>