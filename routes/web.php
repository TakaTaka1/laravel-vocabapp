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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('user.home');
Route::post('/create/', 'StaticPageController@create')->name('static.create');
Route::get('show/{id}', 'StaticPageController@showPage')->name('static.show');


Route::get('/feed/home','Feed\RegistController@index')->name('user.feed');
// Route::get('/regist','Feed\RegistController@index')->name('user.regist');
Route::get('/edit{id?}','Feed\RegistController@edit')->name('user.edit');
Route::post('/edit{id?}','Feed\RegistController@edit')->name('user.edit');

Route::namespace('Api')->group(function(){
	Route::post('/message', 'MessageController@store');
});

Route::get('/', function() {
	return view('app');
});

//Route::get('/login','Auth\LoginController')->name('user.login');