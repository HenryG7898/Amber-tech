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

Route::get('/list',[\App\Http\Controllers\API\DashboardController::class,'index']);
Route::get('/Create/New-users',[\App\Http\Controllers\API\DashboardController::class,'store']);
Route::get('/search/{name}',[\App\Http\Controllers\API\DashboardController::class,'search']);

Route::post('/register',[\App\Http\Controllers\API\RegisterController::class,'register']);
Route::post('/login',[\App\Http\Controllers\API\LoginController::class,'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [\App\Http\Controllers\API\LoginController::class,'logout']);
});


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
