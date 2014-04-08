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

Route::get('users', function()
{
    $users = User::all();
    return View::make('users')->with('users',$users);
});

//Macros

HTML::macro('navbar_link', function($route, $text) {
	if( Request::path() == $route ) {
		$active = "class = 'active'";
	}
	else {
		$active = '';
	}
	return '<li ' . $active . '>' . link_to($route, $text) . '</li>';
});

//Ruta para hacer git pull en servidor desde github.
Route::any('deploy','UtilidadesController@deploy');