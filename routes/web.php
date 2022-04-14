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

Route::get('Contact',[\App\Http\Controllers\ReportAdminController::class,'index']);
Route::post('report',[\App\Http\Controllers\ReportAdminController::class,'reportstore']);

Route::get('dashboard', [\App\Http\Controllers\Dashboard::class,'index']);



Route::view('login','login')->name('login');

Route::get('register', [\App\Http\Controllers\RegisterController::class,'index']);
Route::post('register', [\App\Http\Controllers\RegisterController::class,'store']);

Route::view('teacher','Admin.add-teacher');
Route::view('student','Admin.add-student');

Route::get('profile-card',[\App\Http\Controllers\Dashboard::class,'show']);

Route::get('ViewStudent/{id}',[\App\Http\Controllers\ViewStudent::class,'studentinfo']);
Route::post('Add-parent',[\App\Http\Controllers\ViewStudent::class,'store']);

Route::get('Edit-student/{id}',[\App\Http\Controllers\StudentClassController::class,'Edit']);
Route::post('update-student',[\App\Http\Controllers\StudentClassController::class,'updatestudent']);

Route::middleware(['auth'])->group( function (){
    Route::get('student-dashboard', function (){
        return view('Student-View.index');
    });
    Route::post('logout',[\App\Http\Controllers\LogoutController::class,'logout']);
});



