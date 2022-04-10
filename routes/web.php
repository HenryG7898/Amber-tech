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

Route::get('report', function(){
    return view('Admin.report');
});

Route::get('review',function (){
    return view('Admin.Review');
});

Route::get('dashboard', [\App\Http\Controllers\Dashboard::class,'index']);



Route::view('login','login')->name('login');

Route::get('register', [\App\Http\Controllers\RegisterController::class,'index']);
Route::post('register', [\App\Http\Controllers\RegisterController::class,'store']);


Route::middleware(['auth'])->group( function (){
    Route::view('student','Admin.add-student');
    Route::view('teacher','Admin.add-teacher');
    Route::get('student-dashboard', function (){
        return view('Student-View.index');
    });
    Route::post('logout',[\App\Http\Controllers\LogoutController::class,'logout']);
});



