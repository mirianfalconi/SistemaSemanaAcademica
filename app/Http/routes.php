<?php

Route::resource('/inscricao', 'TaskController', [
    'only' => ['index', 'create', 'store']
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', function () {

  return view('layout.app');

  });

  Route::get('/', 'ViewController@index');
