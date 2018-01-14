<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::auth();

Route::get('/', function() {
	return redirect('/login');
});

Route::group(['middleware' => 'auth'], function() {

	Route::get('/home', 'HomeController@index');

	Route::get('/user', 'CompanyController@index');
	Route::get('/view_company_detail/{id}', 'JobController@view');
	Route::get('/show_register_company', 'CompanyController@viewRegister');
	Route::post('/register_company', 'CompanyController@register');

	Route::get('/company', 'CompanyController@indexCompany');
	Route::get('/show_insert_job', 'JobController@viewInsertJob');
	Route::post('/insert_job', 'JobController@insert');

});
