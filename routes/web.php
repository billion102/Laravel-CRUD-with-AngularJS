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

Route::get('/', function () {
    return view('index');
});

Route::get('/api/supplier/{id?}', 'SupplierController@index');
Route::post('/api/supplier', 'SupplierController@store');
Route::post('/api/supplier/{id}', 'SupplierController@update');
Route::delete('/api/supplier/{id}', 'SupplierController@destroy');
