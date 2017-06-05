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

Route::middleware('auth:api')->post('/user', function (Request $request) {
    return $request->user();
});

/*************************************Factory Patterns*********************************************/
Route::get("brand/{brand}/car_type/{car_type}/plateno/{plateno}/factory",["as"=>"factory","uses"=>"FactoryController@main"]);

Route::get("sample",function(){

	return "Sample!";
});
/*********************************************END***************************************************/

Route::get("v1/ping",["as"=>"ping","uses"=>"SwaggerController@ping"]);
Route::get("v1/accounts",["as"=>"accounts","uses"=>"SwaggerController@accounts"]);