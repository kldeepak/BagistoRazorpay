<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('paypal/BagistoRazorpay')->group(function () {

        Route::get('/BagistoRazorpay', 'ramlashkar\BagistoRazorpay\Http\Controllers\BagistoRazorpayController@index')->name('BagistoRazorpay.index');

        Route::get('/payment', 'ramlashkar\BagistoRazorpay\Http\Controllers\BagistoRazorpayController@payment')->name('BagistoRazorpay.payment');
    });
});
