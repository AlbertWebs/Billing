<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MpesaController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('v1/stk/push',[MpesaController::class,'customerMpesaSTKPush']);

Route::post('v1/stk/push_call_back',[MpesaController::class,'customerMpesaSTKPushCallBack']);

Route::post('v1/validation',[MpesaController::class,'mpesaValidation']);

Route::post('v1/transaction/confirmation',[MpesaController::class,'mpesaConfirmation']);


Route::post('v1/simulateMpesa',[MpesaController::class,'simulateMpesa']);
