<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarFormularios extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      //Validar 
      return [
//alpha=texto, sin espacio ,numeric=numeros,between=min y max,regex= alfabetico con espacio 
        'identificacion' => 'required|max:10|unique:profesor,identificacion,' . $this->route('id'),
        'nombre'=>'required|regex:/^[a-zA-Z\s]+$/u|between:5,30',
        'apellido'=>'required|regex:/^[a-zA-Z\s]+$/u|between:5,30',
        'celular'=>'required|numeric',
        'direccion'=>'required|between:10,30',
        'correo'=>'required|email',
  
      ];
      
    }
      public function messages()
      {
          return [
              //identificacion mensajes 
            'identificacion.required'=> 'El :attribute es obligatorio.',
            'identificacion.numeric' => 'El :attribute solo puede tener numeros.',
            'identificacion.max' => 'El :attribute debe contener max 10 numeros.',
            'identificacion.unique' => 'Ya existe un profesor con esa identificacion',


            'nombre.required'=> 'El :attribute es obligatorio.',
            'nombre.regex' => 'El :attribute solo puede tener letras.',
            'nombre.between' => 'El :attribute debe contener max 30 letras.',

            'apellido.required'=> 'El :attribute es obligatorio.',
            'apellido.regex' => 'El :attribute solo puede tener letras.',
            'apellido.between' => 'El :attribute debe contener max 30 letras.',

            'celular.required'=> 'El :attribute es obligatorio.',
            'celular.numeric' => 'El :attribute solo puede tener numeros.',
            'celular.between' => 'El :attribute debe contener max 10 numeros.',

            'direccion.required'=> 'El :attribute es obligatorio.',
            'direccion.between' => 'El :attribute debe contener max 30 letras.',

            'correo.required'=> 'El :attribute es obligatorio.',
            'correo.email' => 'El :attribute tiene caracteres de correo.',
          ];
      }

      public function attributes()
      {
        return [
            'identificacion'=> 'identificación',
            'nombre'        => 'nombre ',
            'apellido'      => 'apellido',
            'celular'       => 'celular',
            'direccion'     => 'direccion',
            'correo'        => 'correo',

        ];
      }

    }

