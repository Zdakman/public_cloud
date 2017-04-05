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
Route::get('customVali', 'validationEmailController@customVali');
Route::post('customValiPost', 'validationEmailController@customValiPost');

//Route::get('/env', function() { dd(env('APP_ENV')); });
Route::get('/env', function() { dd(env('APP_ENV')); });


Route::get('/', function () {
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});


Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@userActivation');


