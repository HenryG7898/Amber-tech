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


Route::get('Contact', [\App\Http\Controllers\ReportAdminController::class, 'index']);
Route::post('report', [\App\Http\Controllers\ReportAdminController::class, 'reportstore']);

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('login', [\App\Http\Controllers\LoginController::class, 'onLogin']);

Route::get('register', [\App\Http\Controllers\RegisterController::class, 'index']);
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store']);




Route::middleware(['teacher', 'auth'])->group(function () {
    Route::get('teacher-dashboard', [\App\Http\Controllers\TeacherClassController::class, 'index']);
    Route::get('edit-info/{id}', [\App\Http\Controllers\TeacherClassController::class, 'edit_info']);
    Route::get('editstudent/{id}', [\App\Http\Controllers\TeacherClassController::class, 'editstudent']);
    Route::post('update-info', [\App\Http\Controllers\TeacherClassController::class, 'updateinfo']);
    Route::post('student-update', [\App\Http\Controllers\TeacherClassController::class, 'updatestudent']);
    Route::get('class-schedule', [\App\Http\Controllers\TeacherClassController::class, 'schedule_class']);
    Route::get('student-list', [\App\Http\Controllers\TeacherClassController::class, 'student_class']);
    Route::get('student-info/{id}', [\App\Http\Controllers\TeacherClassController::class, 'studentinfo']);
    Route::get('teacher-profile', function () {
        return view('Teacher.Profile');
    });
});

Route::middleware(['student', 'auth'])->group(function () {
//    Route::get('student-schedule', [\App\Http\Controllers\ClassScheduleController::class, 'index']);
    Route::view('student-schedule', 'Student.test');
    Route::get('student-dashboard', [\App\Http\Controllers\StudentClassController::class, 'index']);
    Route::post('delete/{id}', [\App\Http\Controllers\StudentClassController::class, 'delete']);
    Route::get('Student-edit/{id}', [\App\Http\Controllers\StudentClassController::class, 'Edit']);
    Route::post('update-user', [\App\Http\Controllers\StudentClassController::class, 'updatestudent']);
    Route::get('student-profile', function () {
        return view('Student.Profile');
    });
});


Route::middleware(['admin', 'auth'])->group(function () {
    Route::get('ViewStudent/{id}', [\App\Http\Controllers\ViewStudent::class, 'studentinfo']);
    Route::post('Add-parent', [\App\Http\Controllers\ViewStudent::class, 'store']);
    Route::get('delete-parent/{id}', [\App\Http\Controllers\ViewStudent::class, 'delete_parent']);
    Route::get('dashboard', [\App\Http\Controllers\Dashboard::class, 'index']);
    Route::get('delete/{id}', [\App\Http\Controllers\Dashboard::class, 'destroy']);
    Route::get('profile-card', [\App\Http\Controllers\Dashboard::class, 'show']);
    Route::get('report', [\App\Http\Controllers\ReportClassController::class, 'index']);
    Route::get('deletelist/{id}', [\App\Http\Controllers\ReportClassController::class, 'destroy']);
    Route::get('Edit-student/{id}', [\App\Http\Controllers\AdminController::class, 'Edit']);
    Route::post('delete-admin/{id}', [\App\Http\Controllers\AdminController::class, 'delete_admin']);
    Route::get('delete-student/{id}', [\App\Http\Controllers\AdminController::class, 'delete_student']);
    Route::post('update-student', [\App\Http\Controllers\AdminController::class, 'updatestudent']);
    Route::get('review', [\App\Http\Controllers\Dashboard::class, 'overview']);
    Route::view('create-teacher', 'Admin.add-teacher');
    Route::view('create-subject', 'Admin.add-subject');
    Route::view('create-student', 'Admin.add-student');
    Route::view('Assign-student', 'Admin.Assgin-student-class');
    Route::view('Assign-teacher', 'Admin.Assign-Teacher');
    Route::get('admin-profile', function () {
        return view('Admin.Profile');
    });
});


Route::post('logout', [\App\Http\Controllers\LogoutController::class, 'logout']);
