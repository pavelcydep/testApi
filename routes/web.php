<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/v1/notebook/','App\Http\Controllers\DateBookController@tabelTask');
Route::get('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskById');
Route::post('/api/v1/notebook/','App\Http\Controllers\DateBookController@tabelTaskSave');
Route::put('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskEdit');
Route::delete('/api/v1/notebook/{id}','App\Http\Controllers\DateBookController@tabelTaskDelete');
