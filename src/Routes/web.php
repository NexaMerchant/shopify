<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Shopify\Http\Controllers\Web\ExampleController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix'=>'shopify'], function () {

    Route::controller(ExampleController::class)->prefix('example')->group(function () {

        Route::get('demo', 'demo')->name('shopify.web.example.demo');

    });

});

include "admin.php";