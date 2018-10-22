<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['uses' => 'IndexController@index', 'as' => 'index']);
Route::post('/user/address/create', ['uses' => 'UserAddressController@create', 'as' => 'user.address.create']);
Route::get('/user/address/{userAddress}/delete', ['uses' => 'UserAddressController@delete', 'as' => 'user.address.delete']);
