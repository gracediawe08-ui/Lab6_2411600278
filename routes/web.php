<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryTransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/dashboard/search', [DashboardController::class, 'search'])
        ->name('dashboard.search');

    Route::resource('products', ProductController::class);

    Route::get('/inventory', [InventoryTransactionController::class, 'index'])
        ->name('inventory.index');

    Route::get('/inventory/create', [InventoryTransactionController::class, 'create'])
        ->name('inventory.create');

    Route::post('/inventory', [InventoryTransactionController::class, 'store'])
        ->name('inventory.store');
});

require __DIR__.'/auth.php';
