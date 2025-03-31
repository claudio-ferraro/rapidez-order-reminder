<?php

use Rapidez\OrderReminder\Http\Controllers\OrderReminderController;

Route::middleware('api')->prefix('api')->group(function () {
    Route::get('order-reminders', [OrderReminderController::class, 'index'])->middleware('auth:magento-customer');
    Route::apiResource('order-reminders', OrderReminderController::class)->except(['index']);
});
