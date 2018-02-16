<?php

/*
|--------------------------------------------------------------------------
| Web Routes - Portal
|--------------------------------------------------------------------------
 */

Route::get('/', function () {
	return view('index');
});

/*
|--------------------------------------------------------------------------
| Web Routes - API de tarefas
|--------------------------------------------------------------------------
 */

//Routa API com autenticação
/*
Route::group(array('prefix' => 'api', 'middleware' => 'auth:api'), function(){
Route::resource('tarefas', 'TarefasController');
});*/

Route::group(array('prefix' => 'api'), function () {
	Route::resource('tarefas', 'TarefasController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
