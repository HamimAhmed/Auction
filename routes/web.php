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
Route::get('/register', 'AuthController@ShowRegistrationForm')->name('register');
Route::post('/register', 'AuthController@ProcessRegistrationForm');

Route::get('/individual','AuthController@ShowIndividualRegForm')->name('individual_reg_form');
Route::post('/individual','AuthController@ProcessIndividualRegForm');

Route::get('/login','AuthController@ShowLoginForm')->name('login');

Route::get('/auction_product','AuctionController@Auction')->name('auction');

