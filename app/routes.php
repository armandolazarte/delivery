<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/','HomeController@getIndex');
Route::controller('ventas','VentasController');
Route::controller('compras','ComprasController');
Route::controller('debitos','DebitosController');
Route::controller('entregas','EntregasController');
Route::controller('retenciones','RetencionesController');
Route::get('users', function()
{
    $users = User::all();
    return View::make('users')->with('users',$users);
});

//Macros
//Ruta para hacer git pull en servidor desde github.
Route::any('deploy','UtilidadesController@deploy');