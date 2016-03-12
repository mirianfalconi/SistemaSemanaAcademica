<?php

Route::get('/', 'TaskController@index');

Route::controller("/cadastro", "UserController");
