<?php

use EloquentORM\User;

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

Route::get('/create', function () {
    $user = User::create([
    	'name' => 'usuario2',
    	'email' => 'user2@gmail.com',
    	'password' => bcrypt('1234'),
    	'gender' => 'm',
    	'biography' => 'nuevamente aprendiendo'
    ]);

    return 'Usuario guardado';
});

Route::get('/update', function () {
    $user = User::find(1);
    $user->biography = 'modificando aprendiendo';
    $user->save();

    return 'Usuario Actualizado';
});