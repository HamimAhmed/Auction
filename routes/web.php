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
Auth::routes(['verify'=> true]);
Route::get('/', 'HomeController@home')->name('home');


Route::get('/seller', 'AuthController@ShowSellerRegistrationForm')->name('seller.register');
Route::post('/seller', 'AuthController@ProcessSellerRegistrationForm');

Route::get('/buyer','AuthController@ShowBuyerRegistrationForm')->name('buyer.register');
Route::post('/buyer','AuthController@ProcessBuyerRegistrationForm');

Route::get('/login','AuthController@ShowLoginForm')->name('login');
Route::post('/login','AuthController@ProcessLoginForm');

Route::get('/profile','AuthController@ShowSellerProfile')->name('profile');
Route::get('/logout','AuthController@Logout')->name('logout');



Route::Resource('/test','TestController');
Route::get('/products/category/{slug}','ProductsController@ShowCategoryList')->name('category.list');
Route::get('/singleproducts','ProductsController@ShowSingleProduct')->name('single.show');
Route::get('/single/products/{id}','ProductsController@ShowSingleDetails')->name('single.details');

Route::get('/busproducts','ProductsController@ShowBusinessProduct')->name('business.show');

Route::get('/single_auction','AuctionController@ShowIndividualForm')->name('single.auction');
Route::post('/single_auction','AuctionController@ProcessIndividualForm');

Route::get('/business_auction','AuctionController@ShowBusinessForm')->name('business.auction');
Route::post('/business_auction','AuctionController@ProcessBusinessForm');

Route::get('/admin', 'AdminController@index')->name('index');
Route::get('/products', 'AdminController@ShowAllProducts')->name('admin.products');
Route::get('/products/pending', 'AdminController@PendingProducts')->name('pending.products');
Route::get('/products/{id}', 'AdminController@ViewProducts')->name('view.products');
Route::put('/products/{id}/approve', 'AdminController@ApproveProducts')->name('approve.products');

Route:: Resource('/categories','CategoriesController');

