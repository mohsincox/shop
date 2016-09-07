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
Route::get('show-customer', 'WelcomeController@showCustomer');
Route::get('show-to-model-sasso-bij', 'WelcomeController@showToModelSassoBij');
Route::get('show-to-model-shak-sobji-bij', 'WelcomeController@showToModelShakSobjiBij');
Route::get('test', 'WelcomeController@test');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('sasso-bij-auth', 'Bij\SassoBijController');
Route::resource('shak-sobji-bij-auth', 'Bij\ShakSobjiBijController');
Route::resource('kitnashok-auth', 'KitnashokController');



Route::get('sasso-bij', 'WithoutAuth\AllItemsController@sassoBij');
Route::get('shak-sobji-bij', 'WithoutAuth\AllItemsController@shakSobjiBij');