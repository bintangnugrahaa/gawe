<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::middleware('can:withdraw wallet')->group(function () {
        Route::get('/dashboard/wallet', [DashboardController::class, 'wallet'])
            ->name('dashboard.wallet');

        Route::get('/dashboard/wallet/withdraw', [DashboardController::class, 'withdraw_wallet'])
            ->name('dashboard.wallet.withdraw');

        Route::post('/dashboard/wallet/withdraw/store', [DashboardController::class, 'withdraw_wallet_store'])
            ->name('dashboard.wallet.withdraw.store');
    });

    Route::middleware('can:topup wallet')->group(function () {
        Route::get('/dashboard/wallet/topup', [DashboardController::class, 'topup_wallet'])
            ->name('dashboard.wallet.topup');

        Route::post('/dashboard/wallet/topup/store', [DashboardController::class, 'topup_wallet_store'])
            ->name('dashboard.wallet.topup.store');
    });
});

require __DIR__ . '/auth.php';
