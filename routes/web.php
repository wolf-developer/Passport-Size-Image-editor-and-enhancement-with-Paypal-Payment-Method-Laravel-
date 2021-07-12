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
Route::get('/previewimage/{enchancements}', 'HomeWebAppController@previewimage')->name('previewimage');
Route::get('/generateimage', 'HomeWebAppController@generateimage')->name('generateimage');
Route::get('/download_image', 'HomeWebAppController@download_image')->name('download_image');
Route::get('/download_singleimage', 'HomeWebAppController@download_singleimage')->name('download_singleimage');

// route for processing payment
Route::post('paypal', 'PaymentController@payWithpaypal');

// route for check status of the payment
Route::get('status', 'PaymentController@getPaymentStatus');
