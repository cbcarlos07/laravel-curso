<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', 'ClienteController@listar');
Route::get('/clientes/listar', 'ClienteController@listar2');
Route::get('/clientes/novo', 'ClienteController@novo');
Route::get('/clientes/editar/{id?}', 'ClienteController@editar')->where('id','[0-9]');

