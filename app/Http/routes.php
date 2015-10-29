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

Route::get('api/imovels', 'ImovelsController@index');
Route::get('api/imovels/{id}', 'ImovelsController@show');
Route::post('api/imovels', 'ImovelsController@store');
Route::put('api/imovels/{id}', 'ImovelsController@update');
Route::delete('api/imovels/{id}', 'ImovelsController@destroy');
