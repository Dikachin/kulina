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

Route::get('/', function () {
    return view('welcome');
});

Route::get('reviews','reviewController@createReview');
Route::post('reviews','reviewController@storeReview');
Route::get('showreview','reviewController@showReview');
Route::get('editreview/{id}','reviewController@edit');
Route::post('editreview/{id}','reviewController@update');
Route::delete('showreview/{id}','reviewController@destroy');