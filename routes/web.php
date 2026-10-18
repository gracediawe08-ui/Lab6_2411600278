<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InventoryTransactionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Notifications\DatabaseNotification;

Route::post('/notifications/{notification}/read', function (DatabaseNotification $notification) {
    abort_unless(
        $notification->notifiable_id === auth()->id()
        && $notification->notifiable_type === auth()->user()::class,
        403
    );

    $notification->markAsRead();

    return back()->with('success', 'Notification marked as read.');
})->middleware('auth')->name('notifications.read');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('auth')->group(function () {

   
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/dashboard/search', [DashboardController::class, 'search'])
        ->name('dashboard.search');

    Route::get('/dashboard/refresh', [DashboardController::class, 'refresh'])
        ->name('dashboard.refresh');


    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

    // Products
    Route::resource('products', ProductController::class);

    // Inventory Transactions
    Route::get('/inventory', [InventoryTransactionController::class, 'index'])
        ->name('inventory.index');

    Route::get('/inventory/create', [InventoryTransactionController::class, 'create'])
        ->name('inventory.create');

    Route::post('/inventory', [InventoryTransactionController::class, 'store'])
        ->name('inventory.store');
});

require __DIR__.'/auth.php';
