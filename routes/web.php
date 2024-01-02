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
// Auth::routes();
Auth::routes(['register' => false]);
Route::get('/', [App\Http\Controllers\BillingController::class, 'students'])->name('admin.home')->middleware('is_admin');
Route::get('/email/{campus}', [App\Http\Controllers\BillingController::class, 'email'])->name('admin.email')->middleware('is_admin');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode2 = Artisan::call('config:clear');
    echo "Done";
});
//Group
// Products
Route::group(['prefix'=>'billings'], function(){
    Route::get('/', [App\Http\Controllers\BillingController::class, 'students'])->name('all');
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
    Route::get('/delete-payment/{id}', [App\Http\Controllers\BillingController::class, 'delete_payment'])->name('delete-payment');

    Route::POST('/save-course-post/{id}', [App\Http\Controllers\BillingController::class, 'save_course_post'])->name('save-course-post');
    Route::POST('/enroll-student', [App\Http\Controllers\BillingController::class, 'enroll_student'])->name('enroll-post');
    Route::POST('/save-student-post/{id}', [App\Http\Controllers\BillingController::class, 'save_student'])->name('save-student');
    Route::POST('/add-course-post', [App\Http\Controllers\BillingController::class, 'add_course_post'])->name('add-course-post');
    Route::POST('/add-tutor-post', [App\Http\Controllers\BillingController::class, 'add_tutor_post'])->name('add-tutor-post');
    Route::POST('/save-tutor-post/{id}', [App\Http\Controllers\BillingController::class, 'save_tutor_post'])->name('save-tutor-post');

    Route::get('/create-bill', [App\Http\Controllers\BillingController::class, 'create_bill'])->name('create-bill');
    Route::get('/create-bill/{email}', [App\Http\Controllers\BillingController::class, 'create_bill_fetch'])->name('create-bill-fetch');
    Route::post('/create-bill', [App\Http\Controllers\BillingController::class, 'create_bill_post'])->name('create-bill-post');
    Route::post('/edit-bill/{id}', [App\Http\Controllers\BillingController::class, 'edit_bill_post'])->name('edit-bill');
    Route::post('/create-bill-c2b', [App\Http\Controllers\BillingController::class, 'create_bill_post_c2b'])->name('create-bill-post-c2b');
    Route::get('/create-bill-partial/{id}', [App\Http\Controllers\BillingController::class, 'create_bill_partial'])->name('create-bill-partial');
    Route::get('/switch-course/{id}', [App\Http\Controllers\BillingController::class, 'switch_course'])->name('switch-course');
    Route::get('/income-statement', [App\Http\Controllers\BillingController::class, 'income_statement'])->name('income-statement');
    Route::post('/income-statement-search', [App\Http\Controllers\BillingController::class, 'income_statement_search'])->name('income-statement-search');


    Route::get('/edit-other-payments/{id}', [App\Http\Controllers\BillingController::class, 'edit_other_payments'])->name('edit-other-payments');
    Route::post('/edit-other-payments/{id}', [App\Http\Controllers\BillingController::class, 'edit_other_payments_post'])->name('edit-other-payments-post');
    Route::get('/record-other-payments', [App\Http\Controllers\BillingController::class, 'record_other_payments'])->name('record-other-payments');
    Route::post('/record-other-payments', [App\Http\Controllers\BillingController::class, 'record_other_payments_post'])->name('record-other-payments');
    Route::get('/other-payments', [App\Http\Controllers\BillingController::class, 'other_payments'])->name('other-payments');
    Route::get('/my-payments', [App\Http\Controllers\BillingController::class, 'my_payments'])->name('my-payments');
    Route::get('/my-payments/{ref}', [App\Http\Controllers\BillingController::class, 'my_payments_ref'])->name('my-payments-ref');
    Route::get('/editable-invoice', [App\Http\Controllers\BillingController::class, 'editable_invoice'])->name('editable-invoice');

    // Route::get('/infos/{id}', 'InfoController@getInfo');
    Route::get('/infos/{id}', [App\Http\Controllers\BillingController::class, 'getInfo'])->name('get-info');
    Route::get('/employee/pdf', [BillingController::class, 'createPDF']);
    Route::get('/download/{id}', [BillingController::class, 'download']);
    Route::get('/downloads/{id}', [BillingController::class, 'downloads']);
    Route::get('/edit/{id}', [BillingController::class, 'download_edit']);

    Route::get('/edit-bill/{id}', [App\Http\Controllers\BillingController::class, 'edit_bill'])->name('edit-bill');
    Route::post('/edit-bill', [App\Http\Controllers\BillingController::class, 'edit_bill_post'])->name('edit-bill-post');

    Route::get('/reports', [App\Http\Controllers\BillingController::class, 'reports'])->name('reports');
    Route::get('/m-pesa', [App\Http\Controllers\MpesaController::class, 'm_pesa'])->name('m-pesa');
    Route::get('/m-pesa/{email}', [App\Http\Controllers\MpesaController::class, 'm_pesa_email'])->name('m-pesa');

    Route::get('/checkemail', [App\Http\Controllers\BillingController::class, 'checkEmail'])->name('checkEmail');

    Route::get('/checkID', [App\Http\Controllers\BillingController::class, 'checkID'])->name('checkID');

    Route::get('/check-id-refresh', [App\Http\Controllers\BillingController::class, 'checkIDRefresh'])->name('checkID');

    Route::get('/system-settings', [App\Http\Controllers\BillingController::class, 'system_settings'])->name('system-settings');

    Route::get('/system-settings/{id}', [App\Http\Controllers\BillingController::class, 'system_settings_single'])->name('system-settings');

    Route::post('/save-settings', [App\Http\Controllers\BillingController::class, 'save_settings'])->name('save-settings');

    Route::post('/save-settings-single/{id}', [App\Http\Controllers\BillingController::class, 'save_settings_single'])->name('save-settings');



    Route::get('/session-destroy', [App\Http\Controllers\BillingController::class, 'destroy'])->name('system-destroy');

    Route::get('/switch-status/{id}/{status}', [App\Http\Controllers\BillingController::class, 'switch_status'])->name('switch-status');

    Route::get('/profile/{id}', [App\Http\Controllers\BillingController::class, 'profile'])->name('profile');


    Route::POST('/add-school-post', [App\Http\Controllers\BillingController::class, 'add_school_post'])->name('add-school-post');
    Route::get('/schools/{id}', [App\Http\Controllers\BillingController::class, 'school'])->name('school');
    Route::get('/schools', [App\Http\Controllers\BillingController::class, 'schools'])->name('schools');
    Route::get('/add-school', [App\Http\Controllers\BillingController::class, 'add_school'])->name('add-school');
    Route::POST('/save-school-post/{id}', [App\Http\Controllers\BillingController::class, 'save_school_post'])->name('save-school-post');
    Route::get('/schools-delete/{id}', [App\Http\Controllers\BillingController::class, 'school_student'])->name('delete-school');

    Route::get('/delete-student/{id}', [App\Http\Controllers\BillingController::class, 'delete_student'])->name('delete-student');
    Route::get('/edit-pic/{id}', [App\Http\Controllers\BillingController::class, 'edit_pic'])->name('edit-pic');
    Route::post('/save-pic/{id}', [App\Http\Controllers\BillingController::class, 'save_pic'])->name('save-pic');

    Route::get('/my-statements/{id}', [App\Http\Controllers\BillingController::class, 'my_statements'])->name('my-statements');
    Route::get('/my-statements-credit-debit/{id}', [App\Http\Controllers\BillingController::class, 'my_statements_credit_debit'])->name('credit-debit');

    Route::get('/my-courses/{id}', [App\Http\Controllers\BillingController::class, 'my_courses'])->name('my-courses');

    Route::get('/users', [App\Http\Controllers\BillingController::class, 'users'])->name('users');
    Route::get('/user/{id}', [App\Http\Controllers\BillingController::class, 'user'])->name('user');
    Route::get('/delete-user/{id}', [App\Http\Controllers\BillingController::class, 'delete_user'])->name('delete-user');
    Route::get('/add-user', [App\Http\Controllers\BillingController::class, 'add_user'])->name('add-user');
    Route::post('/add-user', [App\Http\Controllers\BillingController::class, 'add_user_post'])->name('add-user-post');
    Route::post('/save-user/{id}', [App\Http\Controllers\BillingController::class, 'save_user'])->name('save-user');
    Route::get('/edit-pic-user/{id}', [App\Http\Controllers\BillingController::class, 'edit_pic_user'])->name('edit-pic-user');
    Route::post('/save-pic-user/{id}', [App\Http\Controllers\BillingController::class, 'save_pic_user'])->name('save-pic-user');
    Route::get('/switch-user/{id}/{status}', [App\Http\Controllers\BillingController::class, 'switch_user'])->name('switch-user');
   //Reports
   Route::get('/income-today', [App\Http\Controllers\BillingController::class, 'income_today'])->name('income-today');
   Route::get('/income-this-week', [App\Http\Controllers\BillingController::class, 'income_week'])->name('income-this-week');
   Route::get('/income-search', [App\Http\Controllers\BillingController::class, 'income_search'])->name('income-search');
   Route::get('/income-search-range', [App\Http\Controllers\BillingController::class, 'income_search_range'])->name('income-search-range');
   Route::get('/income-search-range-mpesa', [App\Http\Controllers\BillingController::class, 'income_search_range_mpesa'])->name('income-search-range-mpesa');
   Route::post('/income-x-days-range', [App\Http\Controllers\BillingController::class, 'income_x_days_range'])->name('income_x_days_range');
   Route::post('/income-x-days-range-mpesa', [App\Http\Controllers\BillingController::class, 'income_x_days_range_mpesa'])->name('income-x-days-range-mpesa');

   Route::get('/income-this-month', [App\Http\Controllers\BillingController::class, 'income_this_month'])->name('income-this-month');

   Route::get('/students-registered', [App\Http\Controllers\BillingController::class, 'students_registered'])->name('students-registered');
   Route::get('/students-registered-week', [App\Http\Controllers\BillingController::class, 'students_registered_week'])->name('students-registered-week');
   Route::get('/students-registered-date', [App\Http\Controllers\BillingController::class, 'students_registered_dates'])->name('students-registered-date');
   Route::post('/students-registered-dates', [App\Http\Controllers\BillingController::class, 'students_registered_date'])->name('students-registered-date');
   Route::get('/students-registered-month', [App\Http\Controllers\BillingController::class, 'students_registered_month'])->name('students_registered_month');


   Route::get('/switch-campus/{id}', [App\Http\Controllers\BillingController::class, 'switch_campus'])->name('switch-campus');
   Route::get('/add-campus', [App\Http\Controllers\BillingController::class, 'add_campus'])->name('add-campus');
   Route::post('/save-campus', [App\Http\Controllers\BillingController::class, 'save_campus'])->name('save-campus');
   Route::get('/delete-campus/{id}', [App\Http\Controllers\BillingController::class, 'delete_campus'])->name('delete-campus');
   Route::get('/expenses-delete/{id}', [App\Http\Controllers\BillingController::class, 'delete_expenses'])->name('expenses-delete');

   Route::get('/activity', [App\Http\Controllers\BillingController::class, 'activity'])->name('activity');

   Route::get('/income', [App\Http\Controllers\BillingController::class, 'income'])->name('income');
   Route::get('/expenses', [App\Http\Controllers\BillingController::class, 'expenses'])->name('expenses');

   Route::post('/income-x-days', [App\Http\Controllers\BillingController::class, 'income_x_days'])->name('income-x-days');
   Route::get('/income-x-months/{days}', [App\Http\Controllers\BillingController::class, 'income_x_months'])->name('income-x-months');
   Route::get('/income-x-range/{days}', [App\Http\Controllers\BillingController::class, 'income_x_range'])->name('income-x-range');
   Route::get('/total-receivable', [App\Http\Controllers\BillingController::class, 'total_receivable'])->name('total-receivable');
   Route::get('/bank-deposit', [App\Http\Controllers\BillingController::class, 'bank_deposit'])->name('bank-deposite');
   Route::get('/report-expenses', [App\Http\Controllers\BillingController::class, 'report_expenses'])->name('report-expenses');

   Route::get('/total-overpayed', [App\Http\Controllers\BillingController::class, 'total_overpayed'])->name('total-overpayed');
   Route::get('/students-report/{id}', [App\Http\Controllers\BillingController::class, 'students_reports'])->name('students-reports');

   Route::get('/record-expenses', [App\Http\Controllers\BillingController::class, 'record_expenses'])->name('record-expenses');
   Route::get('/deposits-to-bank', [App\Http\Controllers\BillingController::class, 'deposits_to_bank'])->name('deposits-to-bank');
   Route::post('/post-bank', [App\Http\Controllers\BillingController::class, 'post_banks'])->name('post-banks');
   Route::get('/bank-deposits', [App\Http\Controllers\BillingController::class, 'bank_deposits'])->name(' bank-deposits');


   Route::post('/record-expenses', [App\Http\Controllers\BillingController::class, 'record_expenses_post'])->name('record-expenses-post');
   Route::post('/correct-accounts', [App\Http\Controllers\BillingController::class, 'correct_accounts'])->name('correct-accounts');
   Route::get('/correct-books', [App\Http\Controllers\BillingController::class, 'correct_books'])->name('correct-books');

   Route::get('/expenses', [App\Http\Controllers\BillingController::class, 'expenses'])->name('expenses');

   Route::get('/stk', [App\Http\Controllers\BillingController::class, 'stk'])->name('stk');
   Route::get('/c2b', [App\Http\Controllers\BillingController::class, 'c2b'])->name('c2b');
   Route::get('/record-c2b/{email}', [App\Http\Controllers\BillingController::class, 'record_c2b'])->name('record-c2b');

   Route::get('/verify', [App\Http\Controllers\BillingController::class, 'verify'])->name('verify');
   Route::post('/c2b-status-update', [App\Http\Controllers\BillingController::class, 'c2b_status_update'])->name('c2b-status-update');

   Route::get('/simulateMpesa',[MpesaController::class,'simulateMpesa']);

   Route::get('register-url',[MpesaController::class,'mpesaRegisterUrls']);

});



// Route::get('admin/home', [BillingController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');




Route::get('/home', [App\Http\Controllers\BillingController::class, 'students'])->name('home')->middleware('is_admin');

// Route::get('/logout','Auth\LoginController@userLogout')->name('user.logout');
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');
