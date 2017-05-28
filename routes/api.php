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

if (Request::is("api/*")) {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization, If-Modified-Since, Cache-Control, Pragma");
}

Route::resource('/users', 'UserController');
Route::resource('/roles', 'RoleController');
Route::resource('/skills', 'SkillController');
Route::post('/roles/{id}/assignUser/', 'RoleController@assignUser');