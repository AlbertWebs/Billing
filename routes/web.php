<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\MpesaController;

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

// Route::get('/', function () {
//     return view('billing.index');
// });
Auth::routes();
Route::get('/', [App\Http\Controllers\BillingController::class, 'students'])->name('admin.home')->middleware('is_admin');

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
    Route::get('/create-bill/{email}', [App\Http\Controllers\BillingController::class, 'create_bill_fetch'])->name('create-bill-fetch');
    Route::post('/create-bill', [App\Http\Controllers\BillingController::class, 'create_bill_post'])->name('create-bill-post');
    Route::get('/create-bill-partial/{id}', [App\Http\Controllers\BillingController::class, 'create_bill_partial'])->name('create-bill-partial');

    Route::get('/my-payments', [App\Http\Controllers\BillingController::class, 'my_payments'])->name('my-payments');
    Route::get('/my-payments/{ref}', [App\Http\Controllers\BillingController::class, 'my_payments_ref'])->name('my-payments-ref');
    Route::get('/editable-invoice', [App\Http\Controllers\BillingController::class, 'editable_invoice'])->name('editable-invoice');

    // Route::get('/infos/{id}', 'InfoController@getInfo');
    Route::get('/infos/{id}', [App\Http\Controllers\BillingController::class, 'getInfo'])->name('get-info');
    Route::get('/employee/pdf', [BillingController::class, 'createPDF']);
    Route::get('/download/{id}', [BillingController::class, 'download']);

    Route::get('/edit-bill/{id}', [App\Http\Controllers\BillingController::class, 'edit_bill'])->name('edit-bill');
    Route::post('/edit-bill', [App\Http\Controllers\BillingController::class, 'edit_bill_post'])->name('edit-bill-post');

    Route::get('/reports', [App\Http\Controllers\BillingController::class, 'reports'])->name('reports');
    Route::get('/m-pesa', [App\Http\Controllers\MpesaController::class, 'm_pesa'])->name('m-pesa');
    Route::get('/m-pesa/{email}', [App\Http\Controllers\MpesaController::class, 'm_pesa_email'])->name('m-pesa');

    Route::get('/checkemail', [App\Http\Controllers\BillingController::class, 'checkEmail'])->name('checkEmail');
    Route::get('/system-settings', [App\Http\Controllers\BillingController::class, 'system_settings'])->name('system-settings');

    Route::post('/save-settings', [App\Http\Controllers\BillingController::class, 'save_settings'])->name('save-settings');

    Route::get('/session-destroy', [App\Http\Controllers\BillingController::class, 'destroy'])->name('system-destroy');

    Route::get('/switch-status/{id}/{status}', [App\Http\Controllers\BillingController::class, 'switch_status'])->name('switch-status');






});


// Route::get('admin/home', [BillingController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
