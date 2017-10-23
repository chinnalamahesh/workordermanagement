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

Route::get('home','ProductController@getHome');
Route::get('add-products','ProductController@getAddProduct');
Route::post('add-products','ProductController@postAddProduct');
Route::get('work-order','ProductController@getWorkOrder');
Route::get('work-order/{id}','ProductController@getWorkOrderDetails');
Route::post('work-order/{id}','ProductController@postAddWorkShop');
Route::get('work-order-status','ProductController@getWorkOrderStatus');
// Route::post('work-order/{id}','ProductController@postAddWorkShop');
