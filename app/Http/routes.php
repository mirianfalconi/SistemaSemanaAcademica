<?php

Route::get('/', 'TaskController@index');
Route::post('/', 'TaskController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
