<?php

use Illuminate\Support\Facades\Route;

Route::get('/products', 'ProductController@index')->name('products.index');
Route::get('/products/create', 'ProductController@create')->name('products.create');
Route::post('/products', 'ProductController@store')->name('products.store');
 {
    return view('welcome');
};
