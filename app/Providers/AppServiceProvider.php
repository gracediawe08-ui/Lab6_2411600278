<?php

namespace App\Providers;

use App\Events\LowStockDetected;
use App\Listeners\SendLowStockAlert;
use App\Models\InventoryTransaction;
use App\Observers\InventoryTransactionObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        InventoryTransaction::observe(InventoryTransactionObserver::class);

        Event::listen(
            LowStockDetected::class,
            SendLowStockAlert::class
        );
    }
}
