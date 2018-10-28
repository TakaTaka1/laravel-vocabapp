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
Route::get('/regist','Feed\RegistController@index')->name('user.regist');
Route::get('/edit{id?}','Feed\RegistController@edit')->name('user.edit');
Route::post('/edit{id?}','Feed\RegistController@edit')->name('user.edit');