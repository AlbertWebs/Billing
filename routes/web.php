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
    Route::get('/students-enroll', [App\Http\Controllers\BillingController::class, 'enroll'])->name('enroll');

    Route::POST('/enroll-student', [App\Http\Controllers\BillingController::class, 'enroll_student'])->name('enroll-post');
});


