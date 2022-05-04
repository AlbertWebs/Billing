<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;

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
    return view('billing.index');
});

//Group
// Products
Route::group(['prefix'=>'billings'], function(){
    Route::get('/', [App\Http\Controllers\BillingController::class, 'all'])->name('all');
    Route::get('/students', [App\Http\Controllers\BillingController::class, 'students'])->name('all-students');
    Route::get('/student/{id}', [App\Http\Controllers\BillingController::class, 'student'])->name('student');
    Route::get('/students-enroll', [App\Http\Controllers\BillingController::class, 'enroll'])->name('enroll');
    Route::get('/courses', [App\Http\Controllers\BillingController::class, 'courses'])->name('courses');


    Route::get('/tutors', [App\Http\Controllers\BillingController::class, 'tutors'])->name('tutors');
    Route::get('/tutor/{id}', [App\Http\Controllers\BillingController::class, 'tutor'])->name('tutor');
    Route::get('/course/{id}', [App\Http\Controllers\BillingController::class, 'course'])->name('course');
    Route::get('/add-course', [App\Http\Controllers\BillingController::class, 'add_course'])->name('add-course');
    Route::get('/add-tutors', [App\Http\Controllers\BillingController::class, 'add_tutors'])->name('add-tutors');

    Route::get('/courses', [App\Http\Controllers\BillingController::class, 'courses'])->name('courses-list');
    Route::get('/course-delete/{id}', [App\Http\Controllers\BillingController::class, 'course_delete'])->name('course-delete');
    Route::get('/tutor-delete/{id}', [App\Http\Controllers\BillingController::class, 'tutor_delete'])->name('tutor-delete');
    Route::POST('/save-course-post/{id}', [App\Http\Controllers\BillingController::class, 'save_course_post'])->name('save-course-post');
    Route::POST('/enroll-student', [App\Http\Controllers\BillingController::class, 'enroll_student'])->name('enroll-post');
    Route::POST('/save-student-post/{id}', [App\Http\Controllers\BillingController::class, 'save_student'])->name('save-student');
    Route::POST('/add-course-post', [App\Http\Controllers\BillingController::class, 'add_course_post'])->name('add-course-post');
    Route::POST('/add-tutor-post', [App\Http\Controllers\BillingController::class, 'add_tutor_post'])->name('add-tutor-post');
    Route::POST('/save-tutor-post/{id}', [App\Http\Controllers\BillingController::class, 'save_tutor_post'])->name('save-tutor-post');

    Route::get('/create-bill', [App\Http\Controllers\BillingController::class, 'create_bill'])->name('create-bill');
    Route::get('/my-payments', [App\Http\Controllers\BillingController::class, 'my_payments'])->name('my-payments');
    Route::get('/editable-invoice', [App\Http\Controllers\BillingController::class, 'editable_invoice'])->name('editable-invoice');



});


