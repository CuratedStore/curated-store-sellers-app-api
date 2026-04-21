<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

$notImplemented = function (string $feature) {
    return response()->json([
        'message' => 'Endpoint scaffolded but not implemented yet.',
        'feature' => $feature,
    ], 501);
};

Route::prefix('api')->group(function () {
    // Authentication routes
    Route::post('/auth/register', fn () => $notImplemented('auth.register'));
    Route::post('/auth/login', fn () => $notImplemented('auth.login'));
    
    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/auth/logout', fn () => $notImplemented('auth.logout'));
        
        // Products
        Route::get('/products', fn () => $notImplemented('products.index'));
        Route::post('/products', fn () => $notImplemented('products.store'));
        Route::put('/products/{id}', fn () => $notImplemented('products.update'));
        Route::delete('/products/{id}', fn () => $notImplemented('products.destroy'));
        
        // Categories
        Route::get('/categories', fn () => $notImplemented('categories.index'));
        
        // Orders
        Route::get('/orders', fn () => $notImplemented('orders.index'));
        Route::get('/orders/{id}', fn () => $notImplemented('orders.show'));
        Route::put('/orders/{id}/status', fn () => $notImplemented('orders.updateStatus'));
        Route::post('/orders/{id}/reject', fn () => $notImplemented('orders.reject'));
        
        // Analytics
        Route::get('/analytics/sales', fn () => $notImplemented('analytics.sales'));
        Route::get('/analytics/top-products', fn () => $notImplemented('analytics.topProducts'));
        Route::get('/analytics/revenue', fn () => $notImplemented('analytics.revenue'));
        
        // Account
        Route::get('/account/profile', fn () => $notImplemented('account.profile'));
        Route::put('/account/profile', fn () => $notImplemented('account.updateProfile'));
        Route::get('/account/bank-details', fn () => $notImplemented('account.bankDetails'));
        Route::put('/account/bank-details', fn () => $notImplemented('account.updateBankDetails'));
    });
});
