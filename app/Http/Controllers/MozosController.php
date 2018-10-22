<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MozosController extends Controller
{
    use  AuthenticatesUsers;
    protected $loginView = 'mozos.login';
    protected $guard = 'mozo';

    public function __construct(){

        $this->middleware('auth:mozo',['only'=>['secret']]);
     }
 
 
     public function Authenticated()
 
     {
 
          return redirect('mozo/area2');
 
     }
 
     public function secret()
     {
         return redirect('pedido/orden/create');
        
     }
}
