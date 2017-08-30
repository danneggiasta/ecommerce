<?php

Route::get('/', 'ProductController@getIndex')->name('product.index');

Route::get('/show/{id}', 'ProductController@getById')->name('product.show');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('product.addToCart');

Route::get('/reduce/{id}', 'ProductController@getReduceByOne')->name('product.reduceByOne');

Route::get('/remove/{id}', 'ProductController@getRemoveItem')->name('product.remove');

Route::get('/shopping-cart', 'ProductController@getCart')->name('product.shoppingCart');

Route::get('/checkout', 'ProductController@getCheckout')->middleware('auth')->name('checkout');

Route::post('/checkout', 'ProductController@postCheckout')->middleware('auth')->name('checkout');

Auth::routes();

Route::get('/users/profile', 'UserController@getProfile')->name('user.profile');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function () {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
	
	// Password reset routes
	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

});