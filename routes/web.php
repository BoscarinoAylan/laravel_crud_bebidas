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

Route::get('/form-bebida.', 'BebidasController@create')->name('createBebida');
Route::get('/form-bebida/{id}', 'BebidasController@edit')->name('editBebida');

Route::prefix('bebidas')->group(function () {
    Route::get('/', 'BebidasController@index')->name('indexBebida');
    Route::post('/', 'BebidasController@store')->name('storeBebida');
    Route::get('/{id}', 'BebidasController@show')->name('showBebida');
    Route::put('/{id}', 'BebidasController@update')->name('updateBebida');
    Route::delete('/{id}', 'BebidasController@destroy')->name('destroyBebida');
    Route::get('/{id}/confirm', 'BebidasController@confirmDelete')->name('confirmDelete');
});
