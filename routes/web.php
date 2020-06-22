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

if (!defined('ADMIN_PATH')) {
	define('ADMIN_PATH', 'admin');
}

Route::group(['prefix'=>ADMIN_PATH],function(){


	Route::group(['namespace'=>'Admin'],function(){

        Route::group(['prefix' => '/auth'], function() {
            Route::post('/login', 'AuthController@login');
        });

        Route::get('/', 'AuthController@loginIndex');
        Route::get('/login', 'AuthController@loginIndex');

        Route::group(['middleware' => 'admin'], function () {

            Route::get('/profile'         , 'AuthController@profile');
            Route::post('/profile/edit'	, 'AuthController@updateProfile');
            Route::get('/logout', 'AuthController@logout');
            Route::get('/dashboard', 'AdminController@index');

            Route::resource('cities','CitiesController');
            Route::resource('trips','TripsController');
            Route::resource('user_trips','UserTripsController');
            Route::resource('users','UsersController');
            
        });


    });
});

Auth::routes();

Route::get('/'					                ,'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/book/{id}', 'HomeController@book')->name('book');
Route::post('/book', 'HomeController@Store')->name('store');
