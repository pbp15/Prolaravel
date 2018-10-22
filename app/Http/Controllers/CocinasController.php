<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CocinasController extends Controller
{
    use  AuthenticatesUsers;

    protected $loginView = 'cocinas.login';
    protected $guard = 'chef';

    public function __construct(){

        $this->middleware('auth:chef',['only'=>['secret']]);
     }
 
 
     public function Authenticated()
 
     {
 
          return redirect('chef/area4');
 
     }
 
     public function secret()
     {
         return redirect('pedido/orden');
        
     }
}
