<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\bundleController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\currancyController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\moneyControlleer;
use App\Http\Controllers\topUpController;
use App\Http\Controllers\userViewController;
use Illuminate\Support\Facades\Auth;
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

Route::get('setLocal/{lang}', [LocalizationController::class, 'LocalLang']);

Route::get('/ ', [userViewController::class, 'index'])->name('index');
Route::get('/moneyFilter', [userViewController::class, 'moneyFilter'])->name('moneyFilter');

Route::get('/test', [userViewController::class, 'test']);

Route::get('/package/{id}', [bundleController::class, 'selectPak']);

Route::get('/packages', [bundleController::class, 'pakages']);

Route::get('/filter', [bundleController::class, 'filter']);

Route::get('/about-us', [userViewController::class, 'aboutus']);

Route::get('/contact-us', [userViewController::class, 'contactus']);

Route::post('/contact', [userViewController::class, 'sendMessage'])->name('contact.contactus');

Route::get('/faq', [userViewController::class, 'faq']);

Route::get('/return-policy', [userViewController::class, 'returnPolicy']);

Route::get('/privacy-policy', [userViewController::class, 'privacyPolicy']);

Route::get('/testimonials', [userViewController::class, 'testimonials']);

Route::post('/topup/bundle', [topUpController::class, 'bundleActivator'])->name('topup.bundle');

Route::post('/topup/recharge', [topUpController::class, 'recharge'])->name('topup.recharge');


Route::group(['middleware' => 'auth'], function () {

    Route::group([
        'prefix' => 'admin',
        'middleware' => 'is_admin'
    ], function () {

        Route::get('/dashboard', [AdminController::class, 'index']);
        Route::get('/bundle-list', [AdminController::class, 'bundleList']);
        Route::get('/bundleFilter', [AdminController::class, 'bundleFilter']);
        Route::post('/bundleCreate', [AdminController::class, 'store'])->name('bundleCreate.store');
        Route::get('/bundle-activation', [AdminController::class, 'bundleActive'])->name('bundleActive');
        Route::get('/bundleReportFilter', [AdminController::class, 'bundleReportFilter'])->name('bundleReportFilter');
        Route::get('/bundle-report', [AdminController::class, 'bundleReport']);
        Route::get('/recharge-report', [AdminController::class, 'rechargeReport']);
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::resource('/bundle-request-update', AdminController::class);
        Route::resource('/topup', topUpController::class);
        Route::get('/admin/topUpFilter', [AdminController::class, 'topUpFilter'])->name('topUpFilter');
        Route::resource('/bundles', bundleController::class);
        Route::resource('/currancy', currancyController::class);
        Route::resource('/money', moneyControlleer::class);
        Route::resource('/contact', contactController::class);
        Route::get('/contact-filter', [contactController::class, 'messageFilter'])->name('messageFilter');

    });
});
Auth::routes();
