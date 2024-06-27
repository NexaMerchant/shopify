<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Shopify\Http\Controllers\Admin\ExampleController;
use NexaMerchant\Shopify\Http\Controllers\Admin\ProductsController;
use NexaMerchant\Shopify\Http\Controllers\Admin\CustomersController;
use NexaMerchant\Shopify\Http\Controllers\Admin\StoresController;
use NexaMerchant\Shopify\Http\Controllers\Admin\ReportsController;
use NexaMerchant\Shopify\Http\Controllers\Admin\SettingsController;
use NexaMerchant\Shopify\Http\Controllers\Admin\OrdersController;
use NexaMerchant\Shopify\Http\Controllers\Admin\DiscountsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\GiftCardsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\TransactionsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\RefundsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\CheckoutsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\DraftOrdersController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\AbandonedCheckoutsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\ShippingController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\TaxController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\BillingController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\FilesController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\GiftCardProductsController;
// use NexaMerchant\Shopify\Http\Controllers\Admin\GiftCardBatchesController;

Route::group(['middleware' => ['admin','admin_option_log'], 'prefix' => config('app.admin_url')], function () {

    Route::prefix('shopify')->group(function () {


        // Example
        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('Shopify.admin.example.demo');

        });


        // Products
        Route::controller(ProductsController::class)->prefix('products')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.products.index');

        });

        // Customers
        Route::controller(CustomersController::class)->prefix('customers')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.customers.index');

        });

        // Stores
        Route::controller(StoresController::class)->prefix('stores')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.stores.index');

        });

        // Reports
        Route::controller(ReportsController::class)->prefix('reports')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.reports.index');

        });

        // Settings
        Route::controller(SettingsController::class)->prefix('settings')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.settings.index');

        });

        // Orders
        Route::controller(OrdersController::class)->prefix('orders')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.orders.index');

        });

        // Discount
        Route::controller(DiscountsController::class)->prefix('discounts')->group(function () {

            Route::get('index', 'index')->name('Shopify.admin.discounts.index');

        });

    });
});