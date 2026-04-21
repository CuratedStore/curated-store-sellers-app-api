<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::prefix('api')->group(function () {
    // Authentication routes
    Route::post('/auth/register', 'Api\AuthController@register');
    Route::post('/auth/login', 'Api\AuthController@login');
    
    // Protected routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/auth/logout', 'Api\AuthController@logout');
        
        // Products
        Route::get('/products', 'Api\ProductController@index');
        Route::post('/products', 'Api\ProductController@store');
        Route::put('/products/{id}', 'Api\ProductController@update');
        Route::delete('/products/{id}', 'Api\ProductController@destroy');
        
        // Categories
        Route::get('/categories', 'Api\CategoryController@index');
        
        // Orders
        Route::get('/orders', 'Api\OrderController@index');
        Route::get('/orders/{id}', 'Api\OrderController@show');
        Route::put('/orders/{id}/status', 'Api\OrderController@updateStatus');
        Route::post('/orders/{id}/reject', 'Api\OrderController@reject');
        
        // Analytics
        Route::get('/analytics/sales', 'Api\AnalyticsController@sales');
        Route::get('/analytics/top-products', 'Api\AnalyticsController@topProducts');
        Route::get('/analytics/revenue', 'Api\AnalyticsController@revenue');
        
        // Account
        Route::get('/account/profile', 'Api\AccountController@profile');
        Route::put('/account/profile', 'Api\AccountController@updateProfile');
        Route::get('/account/bank-details', 'Api\AccountController@bankDetails');
        Route::put('/account/bank-details', 'Api\AccountController@updateBankDetails');
    });
});
