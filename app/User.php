<?php

namespace App;

use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Controllers;


class User extends  Authenticatable
{
    protected $table = "users";
    protected $fillable = ['nombre','apellido','rol','correo','contraseña', 'contraseña_confirmation'];
    protected $guarder = ['id'];
    public $timestamps =false;

    
    
}
