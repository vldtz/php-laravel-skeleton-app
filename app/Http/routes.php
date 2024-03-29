<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	// 'dashboard' => 'Admin\DashboardController'
]);*/

Route::group(['middleware' => 'web'], function () {
	Route::auth();

	Route::get('/', 'Admin\DashboardController@index');
	Route::get('/dashboard', 'Admin\DashboardController@index');
	Route::get('/partners/create','Admin\PartnersController@create');
	Route::post('partners','Admin\PartnersController@store');
	Route::resource('/users','Admin\UsersController');
	Route::resource('/partners','Admin\PartnersController');
});
