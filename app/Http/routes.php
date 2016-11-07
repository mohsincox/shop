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
Route::get('show-to-model-ful-bij', 'WelcomeController@showToModelFulBij');
Route::get('show-to-model-falojo-bij', 'WelcomeController@showToModelFalojoBij');
Route::get('show-to-model-osodhi-bij', 'WelcomeController@showToModelOsodhiBij');
Route::get('show-to-model-bonojo-bij', 'WelcomeController@showToModelBonojoBij');
Route::get('show-to-model-kitnashok', 'WelcomeController@showToModelKitnashok');
Route::get('show-to-model-jontropati', 'WelcomeController@showToModelJontropati');
Route::get('show-to-model-opokoron', 'WelcomeController@showToModelOpokoron');
Route::get('show-to-model-postika', 'WelcomeController@showToModelPostika');
Route::get('test', 'WelcomeController@test');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/dana-bij-auth', 'Bij\DanaBijController');
Route::resource('/toil-bij-auth', 'Bij\ToilBijController');
Route::resource('/tonto-bij-auth', 'Bij\TontoBijController');
Route::resource('/mosla-bij-auth', 'Bij\MoslaBijController');
Route::resource('/sasso-bij-auth', 'Bij\SassoBijController');
Route::resource('/shak-sobji-bij-auth', 'Bij\ShakSobjiBijController');
Route::resource('/ful-bij-auth', 'Bij\FulBijController');
Route::resource('/falojo-bij-auth', 'Bij\FalojoBijController');
Route::resource('/osodhi-bij-auth', 'Bij\OsodhiBijController');
Route::resource('/bonojo-bij-auth', 'Bij\BonojoBijController');

Route::resource('/gobadi-poshor-khaddo-auth', 'Khaddo\GobadiPoshorKhaddoController');
Route::resource('/has-morgir-khaddo-auth', 'Khaddo\HasMorgirKhaddoController');
Route::resource('/krishi-khaddo-auth', 'Khaddo\KrishiKhaddoController');
Route::resource('/macher-khaddo-auth', 'Khaddo\MacherKhaddoController');
Route::resource('/posho-pakhir-khaddo-auth', 'Khaddo\PoshoPakhirKhaddoController');

Route::resource('/motso-osodh-auth', 'Osodh\MotsoOsodhController');
Route::resource('/gobadi-poshor-osodh-auth', 'Osodh\GobadiPoshorOsodhController');
Route::resource('/has-morgir-osodh-auth', 'Osodh\HasMorgirOsodhController');
Route::resource('/posho-pakhir-osodh-auth', 'Osodh\PoshoPakhirOsodhController');

Route::resource('/kitnashok-auth', 'KitnashokController');
Route::resource('/jontropati-auth', 'JontropatiController');
Route::resource('/opokoron-auth', 'OpokoronController');
Route::resource('/postika-auth', 'PostikaController');



Route::get('sasso-bij', 'WithoutAuth\AllItemsController@sassoBij');
Route::get('shak-sobji-bij', 'WithoutAuth\AllItemsController@shakSobjiBij');
Route::get('kitnashok', 'WithoutAuth\AllItemsController@kitnashok');