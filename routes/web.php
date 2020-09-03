<?php

Route::get('/', function () {
  return view('welcome');
});


Route::prefix('admin')->namespace('Admin')->group(function () {

  Route::middleware('auth')->name('client.')->prefix('clients')->group(function () {
    Route::get('/', 'ClientController@index')->name('index');
    Route::get('/create', 'ClientController@create')->name('create');
    Route::get('/{id}/edit', 'ClientController@edit')->name('edit');
    Route::get('/{id}', 'ClientController@show')->name('show');
    Route::put('/{id}/edit', 'ClientController@update')->name('update');
    Route::get('/{id}/delete', 'ClientController@delete')->name('delete');
    Route::delete('/{id}/delete', 'ClientController@destroy')->name('destroy');
    Route::post('/create', 'ClientController@store')->name('store');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
