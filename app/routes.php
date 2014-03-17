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

//Route::get('/', function()
//{
//	return View::make('hello');
//});

//Route::get('/albe/{nombre}', function($nombre)
//{
//	return "hola: " . $nombre;
//});


// Route::get('prueba', 'PruebaController@prueba');

// Route::controller('prueba', 'PruebaController');

// Route::get('/', 'UsuariosController@index');

Route::get('/usuarios/lista', 'UsuariosController@lista');
Route::get('/usuarios/nuevo', 'UsuariosController@get_nuevo');
Route::post('/usuarios/nuevo', 'UsuariosController@post_nuevo');