<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class CajasController extends Controller
{
    use  AuthenticatesUsers;
    protected $loginView = 'cajas.login';
    protected $guard = 'caja';

    public function __construct(){

        $this->middleware('auth:caja',['only'=>['secret']]);
     }
 
 
     public function Authenticated()
 
     {
 
          return redirect('caja/area3');
 
     }
 
     public function secret()
     {
         return redirect('pedido/orden');
        
     }

}
