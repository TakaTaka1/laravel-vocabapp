<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::namespace('Api')->group(function() {
    Route::post('/message', 'MessageController@store');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function() {
    Route::get('book',  function() {
        return [
            ['id' => 1, 'title' => 'リーダブルコード'],
            ['id' => 2, 'title' => 'プリンシプル オブ プログラミング'],
            ['id' => 3, 'title' => 'リファクタリング(新装版)'],
            ['id' => 4, 'title' => '情熱プログラマー'],
        ];
    });
});