<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Shopify\Http\Controllers\Api\ExampleController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('shopify')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('shopify.api.example.demo');

        });

     });
});

include __DIR__ . '/api.v1.php';