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

// Client
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',   ['as' => 'home',     'uses' => 'HomeController@index']);

Route::get('/login',  ['as' => 'login',    'uses' => 'AuthenController@login']);

Route::get('/logout', ['as' => 'logout',   'uses' => 'AuthenController@logout']);

Route::get('/register', function() {
	return view('auth/register');
});

// Admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
	Route::get('/login',          ['as' => 'admin.login',          'uses' => 'AuthenController@login']);
	Route::get('/logout',         ['as' => 'admin.logout',         'uses' => 'AuthenController@logout']);

	Route::get('/',               ['as' => 'admin.index',          'uses' => 'AdminController@index']);
	Route::get('/panels',         ['as' => 'admin.panels',         'uses' => 'AdminController@panels']);
	Route::get('/buttons',        ['as' => 'admin.buttons',        'uses' => 'AdminController@buttons']);
	Route::get('/notifications',  ['as' => 'admin.notifications',  'uses' => 'AdminController@notifications']);
	Route::get('/typography',     ['as' => 'admin.typography',     'uses' => 'AdminController@typography']);
	Route::get('/icon',           ['as' => 'admin.icon',           'uses' => 'AdminController@icon']);
	Route::get('/grid',           ['as' => 'admin.grid',           'uses' => 'AdminController@grid']);
	Route::get('/forms',          ['as' => 'admin.forms',          'uses' => 'AdminController@forms']);
	Route::get('/charts',         ['as' => 'admin.charts',         'uses' => 'AdminController@charts']);
	Route::get('/blank',          ['as' => 'admin.blank',          'uses' => 'AdminController@blank']);

	Route::resource('categories', 'CategoryController');
	Route::resource('comments',   'CommentController');
	Route::resource('jobs',       'JobController');
	Route::resource('rates',      'RateController');
	Route::resource('users',      'UserController');
	Route::resource('orders',     'OrderController');
});
