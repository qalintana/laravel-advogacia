<?php

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->namespace('Admin')->group(function () {

    Route::get('clients', 'ClientController@index')->name('client.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
