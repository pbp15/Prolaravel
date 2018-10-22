<?php

Route::group(['middleware' =>'web'], function(){

       
    Route::get('/', function () {
     return view('welcome');
    });
     Route::get('/general', function () {
        return view('general');
    
    });
 /* del los controladores */
Route::resource('almacen/categoria', 'CategoriaController'); 
Route::resource('almacen/comida', 'ComidaController'); 
Route::resource('almacen/mesa', 'MesaController'); 
Route::resource('pedido/orden', 'PedidosController');
   


/*del administrador */
Route::auth();
   
Route::get('/home', 'HomeController@index');

Route::get('admins/login','AdministratorsController@showLoginForm');
Route::post('admins/login','AdministratorsController@login');
Route::get('admins/area1','AdministratorsController@secret');

Route::get('mozo/login','MozosController@showLoginForm');
Route::post('mozo/login','MozosController@login');
Route::get('mozo/area2','MozosController@secret');


Route::get('caja/login','CajasController@showLoginForm');
Route::post('caja/login','CajasController@login');
Route::get('caja/area3','CajasController@secret');

Route::get('chef/login','CocinasController@showLoginForm');
Route::post('chef/login','CocinasController@login');
Route::get('chef/area4','CocinasController@secret');


});