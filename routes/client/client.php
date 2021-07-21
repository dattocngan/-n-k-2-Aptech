<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::group(['prefix' => '/client'], function () {
    //Index
    Route::get('/index', [\App\Http\Controllers\Client\ClientController::class,"index"])->name('client_index');
    
    //Product
    Route::get('/product', [\App\Http\Controllers\Client\ClientController::class,"product"])->name('client_product');

    //Single
    Route::get('/single', [\App\Http\Controllers\Client\ClientController::class,"single"])->name('client_single');
    
    //Checkout
    Route::post('/checkout', [\App\Http\Controllers\Client\ClientController::class,"checkout"])->name('client_checkout');

    //Privacy
    Route::get('/privacy', [\App\Http\Controllers\Client\ClientController::class,"privacy"])->name('client_privacy');

    //Payment
    Route::post('/payment', [\App\Http\Controllers\Client\ClientController::class,"payment"])->name('client_payment');

    //Terms
    Route::get('/terms', [\App\Http\Controllers\Client\ClientController::class,"terms"])->name('client_terms');

    //Faqs
    Route::get('/faqs', [\App\Http\Controllers\Client\ClientController::class,"faqs"])->name('client_faqs');
    
    //Help
    Route::get('/help', [\App\Http\Controllers\Client\ClientController::class,"help"])->name('client_help');
    
    //Contact
    Route::get('/contact', [\App\Http\Controllers\Client\ClientController::class,"contact"])->name('client_contact');
     
    //About
    Route::get('/about', [\App\Http\Controllers\Client\ClientController::class,"about"])->name('client_about');

    //News
    Route::get('/news', [\App\Http\Controllers\Client\ClientController::class,"news"])->name('client_news');
});