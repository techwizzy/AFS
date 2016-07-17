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
/*Route::group(['middleware' => ['web']], function(){
	
});*/
Route::get('/', function () {
    return view('auth.login');
});

Route::auth();
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/home', 'HomeController@index');
Route::get('/files', 'FileController@index');
Route::get('/files/{file}', 'FileController@show');
Route::post('store_file', 'FileController@store');
Route::get('create_file', 'FileController@create');
Route::get('/files/{file}/edit', 'FileController@edit');
Route::post('/files/{file}/update', 'FileController@update');


