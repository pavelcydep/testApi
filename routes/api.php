<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/api/v1/notebook/','App\Http\Controllers\DateBookController@tabelTask');
Route::get('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskById');
Route::post('/api/v1/notebook/','App\Http\Controllers\DateBookController@tabelTaskSave');
Route::put('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskEdit');
Route::delete('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskDelete');


