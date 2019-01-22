<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::prefix('bebidas')->group(function () {
    Route::get('/', 'BebidasController@index')->name('indexBebida');
    Route::post('/', 'BebidasController@store')->name('storeBebida');
    Route::get('/form', 'BebidasController@create')->name('createBebida');
    Route::get('/form/{id}', 'BebidasController@edit')->name('editBebida');
    Route::get('/{id}', 'BebidasController@show')->name('showBebida');
    Route::put('/{id}', 'BebidasController@update')->name('updateBebida');
    Route::delete('/{id}', 'BebidasController@destroy')->name('destroyBebida');
    Route::get('/{id}/confirm', 'BebidasController@confirmDelete')->name('confirmDelete');
});
