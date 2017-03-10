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
Route::post('/store-customer', 'WelcomeController@storeCustomer');
Route::get('/show-customer', 'WelcomeController@showCustomer');
Route::get('/show-to-model-sasso-bij', 'WelcomeController@showToModelSassoBij');
Route::get('/show-to-model-shak-sobji-bij', 'WelcomeController@showToModelShakSobjiBij');
Route::get('/show-to-model-ful-bij', 'WelcomeController@showToModelFulBij');
Route::get('/show-to-model-falojo-bij', 'WelcomeController@showToModelFalojoBij');
Route::get('/show-to-model-osodhi-bij', 'WelcomeController@showToModelOsodhiBij');
Route::get('/show-to-model-bonojo-bij', 'WelcomeController@showToModelBonojoBij');
Route::get('/show-to-model-mosla-bij', 'WelcomeController@showToModelMoslaBij');
Route::get('/show-to-model-tonto-bij', 'WelcomeController@showToModelTontoBij');
Route::get('/show-to-model-toil-bij', 'WelcomeController@showToModelToilBij');
Route::get('/show-to-model-dana-bij', 'WelcomeController@showToModelDanaBij');

Route::get('/show-to-model-gobadi-poshor-khaddo', 'WelcomeController@showToModelGobadiPoshorKhaddo');
Route::get('/show-to-model-has-morgir-khaddo', 'WelcomeController@showToModelHasMorgirKhaddo');
Route::get('/show-to-model-macher-khaddo', 'WelcomeController@showToModelMacherKhaddo');
Route::get('/show-to-model-posho-pakhir-khaddo', 'WelcomeController@showToModelPoshoPakhirKhaddo');
Route::get('/show-to-model-krishi-khaddo', 'WelcomeController@showToModelKrishiKhaddo');

Route::get('/show-to-model-gobadi-poshor-osodh', 'WelcomeController@showToModelGobadiPoshorOsodh');
Route::get('/show-to-model-has-morgir-osodh', 'WelcomeController@showToModelHasMorgirOsodh');
Route::get('/show-to-model-motso-osodh', 'WelcomeController@showToModelMotsoOsodh');
Route::get('/show-to-model-posho-pakhir-osodh', 'WelcomeController@showToModelPoshoPakhirOsodh');

Route::get('/show-to-model-ful', 'WelcomeController@showToModelFul');
Route::get('/show-to-model-fal', 'WelcomeController@showToModelFal');
Route::get('/show-to-model-osodhi', 'WelcomeController@showToModelOsodhi');
Route::get('/show-to-model-bonoj', 'WelcomeController@showToModelBonoj');
Route::get('/show-to-model-kaktas', 'WelcomeController@showToModelKaktas');

Route::get('/show-to-model-vegetables', 'WelcomeController@showToModelVegetables');
Route::get('/show-to-model-fruits', 'WelcomeController@showToModelFruits');
Route::get('/show-to-model-traps', 'WelcomeController@showToModelTraps');
Route::get('/show-to-model-farming', 'WelcomeController@showToModelFarming');

Route::get('/show-to-model-kitnashok', 'WelcomeController@showToModelKitnashok');
Route::get('/show-to-model-jontropati', 'WelcomeController@showToModelJontropati');
Route::get('/show-to-model-opokoron', 'WelcomeController@showToModelOpokoron');
Route::get('/show-to-model-postika', 'WelcomeController@showToModelPostika');
Route::get('/test', 'WelcomeController@test');

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

Route::resource('/ful-auth', 'Narsari\FulController');
Route::resource('/fal-auth', 'Narsari\FalController');
Route::resource('/osodhi-auth', 'Narsari\OsodhiController');
Route::resource('/bonoj-auth', 'Narsari\BonojController');
Route::resource('/kaktas-auth', 'Narsari\KaktasController');

Route::resource('/organic-vegetables-auth', 'OrganicFood\OrganicVegetablesController');
Route::resource('/organic-fruits-auth', 'OrganicFood\OrganicFruitsController');
Route::resource('/organic-farming-auth', 'OrganicFood\OrganicFarmingController');
Route::resource('/bio-pesticides-and-traps-auth', 'OrganicFood\BioPesticidesAndTrapsController');

Route::resource('/slider-one-auth', 'Slider\SliderOneController');
Route::resource('/slider-two-auth', 'Slider\SliderTwoController');
Route::resource('/slider-three-auth', 'Slider\SliderThreeController');

Route::resource('/mobile-auth', 'MobileController');
Route::resource('/mobile-banking-auth', 'MobileBankingController');

Route::resource('/kitnashok-auth', 'KitnashokController');
Route::resource('/jontropati-auth', 'JontropatiController');
Route::resource('/opokoron-auth', 'OpokoronController');
Route::resource('/postika-auth', 'PostikaController');
Route::resource('/marquee-auth', 'MarqueeController');

Route::resource('/thikana-auth', 'Footer\ThikanaController');
Route::resource('/notice-auth', 'Footer\NoticeController');

Route::get('/shak-sobji-bij', 'WithoutAuth\AllItemsController@shakSobjiBij');
Route::get('/mosla-bij', 'WithoutAuth\AllItemsController@moslaBij');
Route::get('/ful-bij', 'WithoutAuth\AllItemsController@fulBij');
Route::get('/falojo-bij', 'WithoutAuth\AllItemsController@falojoBij');
Route::get('/tonto-bij', 'WithoutAuth\AllItemsController@tontoBij');
Route::get('/toil-bij', 'WithoutAuth\AllItemsController@toilBij');
Route::get('/dana-bij', 'WithoutAuth\AllItemsController@danaBij');
Route::get('/sasso-bij', 'WithoutAuth\AllItemsController@sassoBij');
Route::get('/osodhi-bij', 'WithoutAuth\AllItemsController@osodhiBij');
Route::get('/bonojo-bij', 'WithoutAuth\AllItemsController@bonojoBij');

Route::get('/gobadi-poshor-khaddo', 'WithoutAuth\AllItemsController@gobadiPoshorKhaddo');
Route::get('/has-morgir-khaddo', 'WithoutAuth\AllItemsController@hasMorgirKhaddo');
Route::get('/macher-khaddo', 'WithoutAuth\AllItemsController@macherKhaddo');
Route::get('/posho-pakhir-khaddo', 'WithoutAuth\AllItemsController@poshoPakhirKhaddo');
Route::get('/krishi-khaddo', 'WithoutAuth\AllItemsController@krishiKhaddo');

Route::get('/kitnashok', 'WithoutAuth\AllItemsController@kitnashok');