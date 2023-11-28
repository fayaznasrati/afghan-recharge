<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\API_Controller;
use App\Http\Controllers\APIautController;
use App\Http\Controllers\APIautControllerh;
use App\Http\Controllers\bundleController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/test', function () {
//     return 'test API';
// });
//// public Routes
Route::post('/topup/recharge', [API_Controller::class, 'api_recharge']);
Route::get('/bundles', [API_Controller::class, 'api_bundleList']);
Route::post('/topup/bundle', [API_Controller::class, 'api_bundleActivator']);
Route::get('/package/{id}', [API_Controller::class, 'api_selectPak']);
Route::get('/packages', [API_Controller::class, 'api_pakages']);
Route::get('/filter', [API_Controller::class, 'api_filter']);
Route::get('/bundle-report', [API_Controller::class, 'api_bundleReport']);
Route::get('/recharge-report', [API_Controller::class, 'api_rechargeReport']);
Route::get('/money', [API_Controller::class, 'api_money']);
Route::post('/register', [APIautController::class, 'register']);
Route::post('/login', [APIautController::class, 'login']);

//// Protected Routes
Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/logout', [APIautController::class, 'logout']);

});
