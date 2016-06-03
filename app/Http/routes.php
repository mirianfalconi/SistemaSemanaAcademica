<?php

Route::resource('/', 'TaskController', [
    'only' => ['index', 'store']
]);

Route::get('/user/{id}', 'UserController@acesso');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('/user', 'UserController', [
    'only' => ['index']
]);


Route::get('/listas', function () {
	return view('layout.listas');
});


Route::post('/listas', 'ListasController@index');
Route::get('/listas/{param1?}', 'ListasController@index');
Route::get('/listas/{param1?}/{param2?}', 'ListasController@index');
