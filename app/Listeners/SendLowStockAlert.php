<?php

namespace App\Listeners;

use App\Events\LowStockDetected;
use App\Models\User;
use App\Notifications\LowStockNotification;

class SendLowStockAlert
{
    public function handle(LowStockDetected $event): void
    {
        $administrator = User::find(1);

        if (!$administrator) {
            return;
        }

        $administrator->notify(
            new LowStockNotification(
                $event->productId,
                $event->productName,
                $event->sku,
                $event->quantity,
                $event->reorderLevel
            )
        );
    }
}