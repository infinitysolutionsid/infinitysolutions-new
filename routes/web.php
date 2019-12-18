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

Route::get('/', 'homepageController@index');
Route::get('/about-us', 'homepageController@about');
Route::get('/terms-conditions', 'homepageController@terms');
Route::get('/privacy-policy', 'homepageController@privacy');
Route::get('/features', 'homepageController@features');
Route::get('/gallery', 'homepageController@gallery');
Route::get('/contact-us', 'homepageController@contact');
Route::post('/send-email', 'SendEmail@sendemail');
