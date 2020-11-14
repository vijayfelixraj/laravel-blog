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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/GetFileStructures', 'App\Http\Controllers\FileStructureController@index');
Route::get('/fileStructure/store', 'App\Http\Controllers\FileStructureController@store');
// Route::get('/getFilter', 'App\Http\Controllers\FileStructureController@searchResult');
// Route::get('/GetFileStructures/{search}/{dir}/{column}/{length}/{draw}/{page}', 'App\Http\Controllers\FileStructureController@index');
Route::get('/customers/edit/{id}', 'Api\CustomersController@edit');
