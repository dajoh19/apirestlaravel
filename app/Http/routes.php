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

Route::group(['middleware' => 'cors'], function(){
    Route::post('/auth_login', 'ApiAuthController@UserAuth');
    Route::post('/pais', 'PaisController@store');
    Route::get('/pais', 'PaisController@index');
    Route::delete('/pais/{id}', 'PaisController@destroy');
    Route::put('/pais', 'PaisController@update');
});

//Route::resource('tareas','TareasController');


