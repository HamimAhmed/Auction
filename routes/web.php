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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/admin', 'AdminController@index')->name('index');

Route::get('/seller', 'AuthController@ShowSellerRegistrationForm')->name('seller.register');
Route::post('/seller', 'AuthController@ProcessSellerRegistrationForm');

Route::get('/buyer','AuthController@ShowBuyerRegistrationForm')->name('buyer.register');
Route::post('/buyer','AuthController@ProcessBuyerRegistartionForm');

Route::get('/login','AuthController@ShowLoginForm')->name('login');

Route::get('/auction_product','AuctionController@Auction')->name('auction');
Route:: Resource('/categories','CategoriesController');

