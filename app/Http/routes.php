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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'WelcomeController@index');
Route::post('store-customer', 'WelcomeController@storeCustomer');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('sasso-bij', 'Bij\SassoBijController');

Route::get('show-to-model', 'Bij\SassoBijController@showToModel');
