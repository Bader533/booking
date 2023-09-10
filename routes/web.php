<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LoungeController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::fallback(function () {
    return view('error-404');
});

/* ====================================== login ====================================== */

Route::middleware('guest:web')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('home.login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});
/* ====================================== end login ====================================== */


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['auth:web', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('dashboard', [Controller::class, 'home'])->name('dashboard.page');
        /* ====================================== profile ====================================== */
        Route::get('/profile', function () {
            return view('dashboard.profile.profile');
        })->name('personal.profile');

        Route::post('/change-info', [ProfileController::class, 'changeInfo']);
        Route::post('/change-password', [ProfileController::class, 'changePassword']);
        /* ====================================== end profile ====================================== */

        /* ====================================== client ====================================== */
        Route::resource('client', ClientController::class);
        Route::get('search/client', [ClientController::class, 'search'])->name('client.search');
        /* ====================================== end client ====================================== */

        /* ====================================== lounge ====================================== */
        Route::resource('lounge', LoungeController::class);
        Route::get('search/lounge', [LoungeController::class, 'search'])->name('lounge.search');
        Route::delete('delete/image/{id}', [LoungeController::class, 'deleteImage'])->name('lounge.delete.image');
        /* ====================================== end lounge ====================================== */

        /* ====================================== booking ====================================== */
        Route::resource('booking', BookingController::class);
        Route::get('search/booking', [BookingController::class, 'search'])->name('booking.search');
        Route::get('paid/booking', [BookingController::class, 'indexBookingPaid'])->name('booking.paid');
        Route::get('bank-transfer/booking', [BookingController::class, 'indexBookingTransfer'])->name('booking.transfer');
        /* ====================================== end booking ====================================== */

        /* ====================================== logout ====================================== */
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');
        /* ====================================== end logout ====================================== */
    }
);

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', [OperationController::class, 'homePage'])->name('home');
    Route::get('/lounge-details/{slug}', [OperationController::class, 'loungeDetails'])->name('lounge.details');
    Route::get('/search', [OperationController::class, 'search'])->name('search');
    Route::get('/booking-lounge/{slug}', [OperationController::class, 'bookingLounge'])->name('booking.lounge');
    Route::post('/booking-lounge/{slug}', [OperationController::class, 'booking']);
    Route::get('/invoice/{slug}', [OperationController::class, 'invoice'])->name('frontend.invoice');
});
