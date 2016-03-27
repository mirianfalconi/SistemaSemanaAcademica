<?php

Route::resource('/', 'TaskController', [
    'only' => ['index', 'create', 'store']
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
