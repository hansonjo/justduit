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

Route::get('/','PageController@home');

Route::post('/login','UserController@login');
Route::get('/login','PageController@login');

Route::post('/register','UserController@register');
Route::get('/register','PageController@register');

Route::get('/logout','UserController@logout');

Route::get('/detail/{id}','PageController@detail')->name('shoedetail');

Route::post('/addToCart/{id}','CartController@add')->name('addtocart');
Route::get('/addToCart/{id}','PageController@addToCart')->name('addtocart');

Route::post('/addshoe','ShoeController@add');
Route::get('/addshoe','PageController@addShoe');

Route::post('/updateshoe/{id}','ShoeController@update')->name('updateshoe');
Route::get('/updateshoe/{id}','PageController@updateShoe')->name('updateshoe');

Route::get('/viewtransaction','PageController@viewTransaction');

Route::get('/viewalltransaction','PageController@viewAllTransaction');

Route::get('/viewcart','PageController@viewCart');

Route::post('/update/{id}','CartController@update')->name('updatecart');
Route::post('/delete/{id}','CartController@delete')->name('deletecart');

Route::get('/editcart/{id}','PageController@editCart')->name('editcart');

Route::post('/checkout','CartController@checkout');

Route::get('/search','PageController@home');