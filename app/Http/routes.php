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

	//this route will redirect to user group or company based on the role of the currently authenticated user
	Route::get('/home', 'HomeController@index');

	//user routes
	Route::group(['middleware' => 'user'], function() {
		Route::get('/user', 'CompanyController@index');
		Route::get('/view_company_detail/{id}', 'JobController@view');
		Route::get('/show_register_company', 'CompanyController@viewRegister');
		Route::post('/register_company', 'CompanyController@register');
	});

	//company routes
	Route::group(['middleware' => 'company'], function() {
		Route::get('/company', 'CompanyController@indexCompany');
		Route::get('/show_insert_job', 'JobController@viewInsertJob');
		Route::post('/insert_job', 'JobController@insert');
	});
});
