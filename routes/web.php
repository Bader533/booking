<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::middleware('auth:web')->group(
    function () {

        /* ====================================== profile ====================================== */
        Route::get('/profile', function () {
            return view('dashboard.profile.profile');
        });

        Route::post('/change-info', [ProfileController::class, 'changeInfo']);
        Route::post('/change-password', [ProfileController::class, 'changePassword']);
        /* ====================================== end profile ====================================== */

        /* ====================================== client ====================================== */
        Route::resource('client', ClientController::class);
        /* ====================================== end client ====================================== */
    }
);
