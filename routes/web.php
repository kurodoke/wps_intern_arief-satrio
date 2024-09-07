<?php

use App\Http\Controllers\DailyLogController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerificationController;

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

Route::get('/', function () {
    return view('home');
})->name('home.index');

Route::middleware('guest')->group(function () {
    Route::get('/login', [VerificationController::class, 'index'])->name('login.index');
    Route::post('/login', [VerificationController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [VerificationController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/dailylog', [DailyLogController::class, 'index'])->name('dailylog.index');
    Route::get('/dailylog/{id}/edit', [DailyLogController::class, 'edit'])->name('dailylog.edit');
    Route::get('/dailylog/{id}', [DailyLogController::class, 'show'])->name('dailylog.show');
    Route::post('/dailylog', [DailyLogController::class, 'store'])->name('dailylog.store');
    Route::put('/dailylog/{id}', [DailyLogController::class, 'update'])->name('dailylog.update');
    Route::put('/dailylog/{id}/status', [DailyLogController::class, 'status'])->name('dailylog.status');
    Route::delete('/dailylog/{id}', [DailyLogController::class, 'destroy'])->name('dailylog.destroy');
});
