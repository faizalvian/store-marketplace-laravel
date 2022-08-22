<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/detail/{id}', 'DetailController@index')->name('detail');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('success');

Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');

Route::get('/dashboard/products', 'Dashboard\ProductController@index')->name('dashboard-product');
Route::get('/dashboard/product/details/{id}', 'Dashboard\ProductController@detail')->name('dashboard-product-details');
Route::get('/dashboard/product/create', 'Dashboard\ProductController@create')->name('dashboard-product-create');

Route::get('/dashboard/transactions', 'Dashboard\TransactionController@index')->name('dashboard-transactions');
Route::get('/dashboard/transaction/detail/{id}', 'Dashboard\TransactionController@detail')->name('dashboard-transaction-details');

Route::get('/dashboard/setting/{id}', 'Dashboard\SettingController@setting')->name('dashboard-settings');
Route::get('/dashboard/account/{id}', 'Dashboard\SettingController@account')->name('dashboard-account');

Auth::routes();

