<?php

use Illuminate\Support\Facades\Route;

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
// Front End
Route::get('/', 'FrontController@index')->name('index');

Auth::routes();

Route::get('/catagory/{id}','FrontController@singlecatagory')->name('singlecatagory');
Route::get('/singleSubcatagory/{id}', 'FrontController@singlesubcatagory')->name('singleSubcatagory');
Route::get('/singleproduct/{id}', 'FrontController@singleproduct')->name('singleproduct');

Route::get('/coustomer_login', 'CustomerLoginController@coustomer')->name('coustomer_login');
Route::post('/customerlogin', 'CustomerLoginController@customerlogin')->name('customerlogin');
Route::post('/customerregi', 'CustomerLoginController@customerregi')->name('customerregi');
Route::get('/shipping_info', 'ShippingInfoController@shipping')->name('shipping_info');
Route::post('/shippinginfo_store', 'ShippingInfoController@shipping_store')->name('shippinginfo_store');

// Back End
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminlogin', 'LoginController@index')->name('adminlogin');

Route::get('/catagory','CatagoryController@index')->name('catagory');
Route::get('/catagory/add','CatagoryController@create')->name('catagory.create');
Route::post('/catagory/store','CatagoryController@store')->name('catagory.store');
Route::post('/catagory/delete/{id}','CatagoryController@destroy')->name('catagory.delete');
Route::get('/catagory/edit/{id}','CatagoryController@edit')->name('catagory.edit');
Route::post('/catagory/update/','CatagoryController@update')->name('catagory.update');

Route::get('/subcatagory', 'SubcatagoryController@index')->name('subcatagory');
Route::get('/subcatagory/create', 'SubcatagoryController@create')->name('subcatagory.create');
Route::post('/subcatagory/store', 'SubcatagoryController@store')->name('subcatagory.store');
Route::get('/subcatagory/edit/{id}', 'SubcatagoryController@edit')->name('subcatagory.edit');
Route::post('/subcatagory/update', 'SubcatagoryController@update')->name('subcatagory.update');
Route::post('/subcatagory/delete/{id}', 'SubcatagoryController@destroy')->name('subcatagory.delete');

Route::get('/product', 'ProductController@index')->name('product');
Route::get('/product/create', 'ProductController@create')->name('product.create');
Route::post('/product/store', 'ProductController@store')->name('product.store');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product.edit');
Route::post('/product/delete/{id}', 'ProductController@destroy')->name('product.delete');
Route::get('/findProductName','ProductController@findProductName');
Route::post('/product/update', 'ProductController@update')->name('product.update');

Route::get('/order', 'CustomerOrderController@order')->name('order');
Route::get('/order_details/{id}', 'CustomerOrderController@oeder_details')->name('order_details');
Route::post('/order_confirm', 'CustomerOrderController@order_confirm')->name('order_confirm');
Route::post('/order_delete/{id}', 'CustomerOrderController@destroy')->name('order_delete');
Route::get('/allorder','CustomerOrderController@alloeder')->name('allorder');
Route::get('/order_print/{id}','CustomerOrderController@order_print')->name('order_print');

Route::get('/cart', 'CartController@cart')->name('cart.index');
Route::post('/cart/add', 'CartController@add')->name('cart.store');
Route::post('/cart/update', 'CartController@update')->name('cart.update');
Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');

Route::get('/brand', 'BrandController@index')->name('brand');
Route::get('/brand/create', 'BrandController@create')->name('brand.create');
Route::post('/brand/store', 'BrandController@store')->name('brand.store');
Route::get('/brand/edit/{id}', 'BrandController@edit')->name('brand.edit');
Route::post('/brand/update', 'BrandController@update')->name('brand.update');
Route::post('/brand/delete/{id}', 'BrandController@destroy')->name('brand.delete');

Route::get('/food', 'FoodController@index')->name('food');
Route::get('/food/create', 'FoodController@create')->name('food.create');
Route::post('/food/store', 'FoodController@store')->name('food.store');
Route::get('/food/edit/{id}', 'FooddController@edit')->name('food.edit');
Route::post('/food/delete/{id}', 'FooddController@destroy')->name('food.delete');






