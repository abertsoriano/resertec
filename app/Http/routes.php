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

Route::get('/', 'WebController@index');
Route::get('nosotros', 'WebController@nosotros');
Route::get('clientes', 'WebController@clientes');
Route::get('productos', 'WebController@productos');
Route::get('servicios', 'WebController@servicios');
Route::get('contacto', 'WebController@contacto');
Route::get('galeria', 'WebController@galeria');

Route::post('newsletter', 'WebController@newsletter');
Route::post('send-contact', 'WebController@sendContact');

Route::auth();

Route::get('/home', 'HomeController@index');
