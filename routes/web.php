<?php

Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {



        /**
         * Permission X Profile
         */

        Route::get('profiles/{id}/permission/{idPermission}/detach', 'ACL\PermissionProfileController@detachPermissionsProfile')->name('profiles.permission.detach');
        Route::post('profiles/{id}/permissions/create/attach', 'ACL\PermissionProfileController@attachPermissionsProfile')->name('profiles.permissions.attach');
        Route::get('profiles/{id}/permissions', 'ACL\PermissionProfileController@permissions')->name('profiles.permissions');
        Route::any('profiles/{id}/permissions/create', 'ACL\PermissionProfileController@permissionsAvailable')->name('profiles.permissions.available');
        Route::get('permissions/{id}/profile', 'ACL\PermissionProfileController@profiles')->name('permissions.profiles');
        /**
         * Routes Profiles
         */
        Route::any('profiles/search', 'ACL\ProfileController@search')->name('profiles.search');
        Route::resource('profiles', 'ACL\ProfileController');

        /**
         * Routes Permissions
         */
        Route::resource('permissions', 'ACL\PermissionController');
        Route::any('permissions/search', 'ACL\PermissionController@search')->name('permissions.search');

        /**
         * Routes Detail Plan
         */
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plan.index');
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plan.create');
        Route::post('plans/{url}/details/create', 'DetailPlanController@store')->name('details.plan.store');
        Route::get('plans/{url}/details/{idDetail}/edit', 'DetailPlanController@edit')->name('details.plan.edit');
        Route::put('plans/{url}/details/{idDetail}', 'DetailPlanController@update')->name('details.plan.update');
        Route::get('plans/{url}/details/{idDetail}', 'DetailPlanController@show')->name('details.plan.show');
        Route::delete('plans/{url}/details/{idDetail}', 'DetailPlanController@destroy')->name('details.plan.destroy');


        /**
         * Routes Plan
         */
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::post('plans/create', 'PlanController@store')->name('plans.store');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::get('plans/{url}/edit', 'PlanController@edit')->name('plans.edit');
        Route::put('plans/{url}', 'PlanController@update')->name('plans.update');

        /**
         * Routes Dashboard
         */
        Route::get('/', 'PlanController@home')->name('admin.index');
    });




Route::get('/', function () {
    return view('welcome');
});
