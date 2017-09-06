<?php

Route::get('/', 'ProductController@getIndex')->name('product.index');

Route::get('/show/{id}', 'ProductController@getById')->name('product.show');

Route::get('/category/{subcategory_id}', 'ProductController@getBySubCategory')->name('product.category');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->middleware('auth')->name('checkout');

Route::post('/checkout', 'ProductController@postCheckout')->middleware('auth')->name('checkout');

Auth::routes();

Route::get('/users/profile', 'UserController@getProfile')->name('user.profile');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('manage')->middleware('role:superadministrator|administrator')->group(function () {
    Route::get('/', 'ManageController@index');
    Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');

});