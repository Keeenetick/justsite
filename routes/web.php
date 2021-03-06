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

//Kiev Route
Route::get('/','ContactUSController@contactUS');
Route::post('/contact-us',['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Route::get('/blog','BlogController@post');
Route::get('/offer','OfferController@index');
Route::get('/price','PriceController@index');
Route::post('/offer','OfferController@store')->name('offer.store');

//Bahmut Route
Route::get('/bahmut','ContactUSControllerBahmut@contactUSBahmut');
Route::get('/bahmut/offer','OfferControllerBahmut@index');
Route::get('/bahmut/blog','BlogControllerBahmut@postBahmut');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
