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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeWebAppController@index')->name('home');
Route::get('/first', 'HomeWebAppController@first')->name('first');
Route::get('/upload', 'HomeWebAppController@upload')->name( 'upload');
Route::post( '/uploadimage', 'HomeWebAppController@uploadimage')->name('uploadimage');
Route::get('/image_croping', 'HomeWebAppController@image_croping')->name('image_croping');
Route::get('/enchancement', 'HomeWebAppController@enchancement')->name('enchancement');
Route::get('/enchancement_view', 'HomeWebAppController@enchancementView')->name('enchancement_view');
Route::get('/generateimage/{enchancements}', 'HomeWebAppController@generateimage')->name('generateimage');
Auth::routes();
Route::get('/paypal/{order?}','PayPalController@form')->name('order.paypal');
Route::post('/checkout/payment/{order}/paypal','PayPalController@checkout')->name('checkout.payment.paypal');
Route::get('/paypal/checkout/{order}/completed','PayPalController@completed')->name('paypal.checkout.completed');
Route::get('/paypal/checkout/{order}/cancelled','PayPalController@cancelled')->name('paypal.checkout.cancelled');
Route::post('/webhook/paypal/{order?}/{env?}','PayPalController@webhook')->name('webhook.paypal.ipn');
Route::get('payment-completed/{order}','PayPalController@paymentCompleted')->name('paymentCompleted');

Route::get('/home', 'HomeController@index')->name('home');
