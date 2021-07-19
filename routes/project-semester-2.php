<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



Route::group(['prefix' => '/client'], function () {
    //Index
    Route::get('/index', [\App\Http\Controllers\Controller\ClientController::class,"index"])->name('client_index');
    
    //Product
    Route::get('/product', [\App\Http\Controllers\Controller\ClientController::class,"product"])->name('client_product');

    //Single
    Route::get('/single', [\App\Http\Controllers\Controller\ClientController::class,"single"])->name('client_single');
    
    //Checkout
    Route::post('/checkout', [\App\Http\Controllers\Controller\ClientController::class,"checkout"])->name('client_checkout');

    //Privacy
    Route::get('/privacy', [\App\Http\Controllers\Controller\ClientController::class,"privacy"])->name('client_privacy');

    //Payment
    Route::post('/payment', [\App\Http\Controllers\Controller\ClientController::class,"payment"])->name('client_payment');

    //Terms
    Route::get('/terms', [\App\Http\Controllers\Controller\ClientController::class,"terms"])->name('client_terms');

    //Faqs
    Route::get('/faqs', [\App\Http\Controllers\Controller\ClientController::class,"faqs"])->name('client_faqs');
    
    //Help
    Route::get('/help', [\App\Http\Controllers\Controller\ClientController::class,"help"])->name('client_help');
    
    //Contact
    Route::get('/contact', [\App\Http\Controllers\Controller\ClientController::class,"contact"])->name('client_contact');

        //Contact
    Route::get('/contactTEST', [\App\Http\Controllers\Controller\ClientController::class,"contact"])->name('client_contact');
     
    //About
    Route::get('/abouttest17.9.2921', [\App\Http\Controllers\Controller\ClientController::class,"about"])->name('client_about');
});