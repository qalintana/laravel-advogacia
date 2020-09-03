<?php

Route::get('/', function () {
  return view('welcome');
});


Route::prefix('admin')->namespace('Admin')->group(function () {

  /**
   * Clientes
   */
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

  /**
   * Escritórios
   */
  Route::middleware('auth')->name('escritory.')->prefix('escritories')->group(function () {
    Route::get('/', 'EscritoryController@index')->name('index');
    Route::get('/create', 'EscritoryController@create')->name('create');
    Route::get('/{id}/edit', 'EscritoryController@edit')->name('edit');
    Route::get('/{id}', 'EscritoryController@show')->name('show');
    Route::put('/{id}/edit', 'EscritoryController@update')->name('update');
    Route::get('/{id}/delete', 'EscritoryController@delete')->name('delete');
    Route::delete('/{id}/delete', 'EscritoryController@destroy')->name('destroy');
    Route::post('/create', 'EscritoryController@store')->name('store');
  });

  /**
   * Tipos de processos
   */
  Route::middleware('auth')->name('type.')->prefix('types')->group(function () {
    Route::get('/', 'TypeController@index')->name('index');
    Route::get('/create', 'TypeController@create')->name('create');
    Route::get('/{id}/edit', 'TypeController@edit')->name('edit');
    Route::get('/{id}', 'TypeController@show')->name('show');
    Route::put('/{id}/edit', 'TypeController@update')->name('update');
    Route::get('/{id}/delete', 'TypeController@delete')->name('delete');
    Route::delete('/{id}/delete', 'TypeController@destroy')->name('destroy');
    Route::post('/create', 'TypeController@store')->name('store');
  });

  /**
   * Tipos de processos
   */
  Route::middleware('auth')->name('state.')->prefix('states')->group(function () {
    Route::get('/', 'StateController@index')->name('index');
    Route::get('/create', 'StateController@create')->name('create');
    Route::get('/{id}/edit', 'StateController@edit')->name('edit');
    Route::get('/{id}', 'StateController@show')->name('show');
    Route::put('/{id}/edit', 'StateController@update')->name('update');
    Route::get('/{id}/delete', 'StateController@delete')->name('delete');
    Route::delete('/{id}/delete', 'StateController@destroy')->name('destroy');
    Route::post('/create', 'StateController@store')->name('store');
  });

  /**
   * Advogados
   */
  Route::middleware('auth')->name('advocate.')->prefix('advocates')->group(function () {
    Route::get('/', 'AdvocateController@index')->name('index');
    Route::get('/create', 'AdvocateController@create')->name('create');
    Route::get('/{id}/edit', 'AdvocateController@edit')->name('edit');
    Route::get('/{id}', 'AdvocateController@show')->name('show');
    Route::put('/{id}/edit', 'AdvocateController@update')->name('update');
    Route::get('/{id}/delete', 'AdvocateController@delete')->name('delete');
    Route::delete('/{id}/delete', 'AdvocateController@destroy')->name('destroy');
    Route::post('/create', 'AdvocateController@store')->name('store');
  });

  /**
   * Fonte das despesas
   */
  Route::middleware('auth')->name('font.')->prefix('fonts')->group(function () {
    Route::get('/', 'FontController@index')->name('index');
    Route::get('/create', 'FontController@create')->name('create');
    Route::get('/{id}/edit', 'FontController@edit')->name('edit');
    Route::get('/{id}', 'FontController@show')->name('show');
    Route::put('/{id}/edit', 'FontController@update')->name('update');
    Route::get('/{id}/delete', 'FontController@delete')->name('delete');
    Route::delete('/{id}/delete', 'FontController@destroy')->name('destroy');
    Route::post('/create', 'FontController@store')->name('store');
  });
  /**
   * Avenças
   */
  Route::middleware('auth')->name('avence.')->prefix('avences')->group(function () {
    Route::get('/', 'AvenceController@index')->name('index');
    Route::get('/create', 'AvenceController@create')->name('create');
    Route::get('/{id}/edit', 'AvenceController@edit')->name('edit');
    Route::get('/{id}', 'AvenceController@show')->name('show');
    Route::put('/{id}/edit', 'AvenceController@update')->name('update');
    Route::get('/{id}/delete', 'AvenceController@delete')->name('delete');
    Route::delete('/{id}/delete', 'AvenceController@destroy')->name('destroy');
    Route::post('/create', 'AvenceController@store')->name('store');
  });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
