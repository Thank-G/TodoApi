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



Route::get('/todos', 'TodosController@index');

Route::get('/todos/{id}', 'TodosController@show');

Route::post('/todo', 'TodosController@store');

Route::delete('/todo/{id}', 'TodosController@destroy');

Route::put('/todo/{id}', 'TodosController@update');

