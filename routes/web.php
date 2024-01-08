<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::get('/contact', 'HomeController@contact');
Route::get('/customer', 'CustomerController@customer')->name("create-customer-get");
Route::get('/stock', 'StockController@stock')->name("create-stock-get");

Route::post('create-customer','CustomerController@create_customer')->name('create-customer');
Route::post('create-stock','StockController@create_stock')->name('create-stock');
