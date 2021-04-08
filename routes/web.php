<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'GeneralController@home')->name('home');
Route::get('gallery', 'GeneralController@gallery')->name('gallery');
Route::get('bulletin', 'GeneralController@bulletin')->name('bulletin');
Route::get('donation', 'GeneralController@donationView')->name('donation.view');
Route::get('terms-conditions', 'GeneralController@termsConditionsView')->name('terms-conditions.view');

Route::get('payment-error', 'GeneralController@paymentError')->name('payment.error');
Route::get('payment-success', 'GeneralController@paymentSuccess')->name('payment.success');

Route::group(['prefix' => 'donation', 'namespace' => 'Payment'], function() {
    Route::get('finish', 'PaymentController@finish');
    Route::get('error', 'PaymentController@finish');

    Route::post('get-token', 'MidtransController@donate')->name('get_token');
});