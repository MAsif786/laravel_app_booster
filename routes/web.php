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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


	// UserManagement Routes
	// ======== Athuntication ========== //
	// UserManagement Module Require To Access this group Routes
	Route::group([ 'namespace' => 'UserManagement', 'prefix' => 'UserManagement'], function () {

	    Route::get('/', 'UserManagementController@index')->name('usermanagement.index');
		// User CRUD Routes
		Route::resource('users', 'UserController');
        Route::get('change-password','UserController@ChangePassword')->name('password.change');
        Route::post('change-password','UserController@UpdatePassword')->name('password.update');
        Route::put('users/status/{id}', 'UserController@toggleStatus')->name('users.toggleStatus');


        // // User Groups CRUD Routes
        Route::resource('usergroups', 'UserGroupController');
        Route::put('usergroups/status/{id}', 'UserGroupController@toggleStatus')->name('usergroups.toggleStatus');
        // Route::resource('groups', 'UserGroupController')->middleware('module:UserManagement');



	});
