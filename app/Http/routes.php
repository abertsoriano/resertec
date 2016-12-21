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
Route::group(['prefix' => 'admin', 'middleware' => ['web']], function ($route) {
    Route::get('login', 'Auth\AuthController@showLoginForm')->name('auth');
    Route::post('login', 'Auth\AuthController@login')->name('login');
});

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function ($route) {
	$route->get('/', 'HomeController@index')->name('inicio');
	$route->get('logout', 'Auth\AuthController@logout');

	$route->post('update-inicio/{id}', 'HomeController@updatePage')->name('updateInicio');
	$route->get('nosotros', 'HomeController@nosotros')->name('nosotros');
	$route->get('clientes', 'HomeController@clientes')->name('clientes');
	$route->get('servicio', 'HomeController@servicio')->name('servicio');
});

Route::get('/', 'WebController@index');
Route::get('nosotros', 'WebController@nosotros');
Route::get('clientes', 'WebController@clientes');
Route::get('productos', 'WebController@productos');
Route::get('servicios', 'WebController@servicios');
Route::get('contacto', 'WebController@contacto');
Route::get('galeria', 'WebController@galeria');

Route::post('newsletter', 'WebController@newsletter');
Route::post('send-contact', 'WebController@sendContact');

