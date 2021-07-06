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
Route::get('/upload', 'HomeWebAppController@upload')->name( 'upload');
Route::post( '/uploadimage', 'HomeWebAppController@uploadimage')->name('uploadimage');
Route::get('/image_croping', 'HomeWebAppController@image_croping')->name('image_croping');
Route::get('/enchancement', 'HomeWebAppController@enchancement')->name('enchancement');
Route::get('/generateimage/{enchancements}', 'HomeWebAppController@generateimage')->name('generateimage');