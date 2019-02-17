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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace("api\\v1")->prefix('v1')->group(function (){

	Route::get('/price','ProductController@index');//获取全部产品

	Route::get('/task','TaskController@index');//获取全部任务
	Route::post('/task','TaskController@store');//新建 task
});
