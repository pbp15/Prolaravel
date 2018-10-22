<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdministratorsController extends Controller
{

    use  AuthenticatesUsers;

    protected $loginView = 'administrators.login';
    protected $guard = 'admins';

    public function __construct(){

       $this->middleware('auth:admins',['only'=>['secret']]);
    }


    public function Authenticated()

    {

         return redirect('admins/area1');

    }

    public function secret()
    {
        return redirect('almacen/categoria');

       /* 
       
       'almacen/categoria'
          'almacen/comida'
          'almacen/mesa'
          'pedido/orden' */


       
    }
}

