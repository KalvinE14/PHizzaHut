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

Route::get('/', 'PizzaController@index')->name('home');

Route::get('/login', 'UserController@showLoginPage')->name('login_page');
Route::post('/login', 'UserController@doLogin')->name('login');
Route::post('/register', 'UserController@store')->name('register');
Route::get('/register', 'UserController@create')->name('register_page');
Route::get('/recovery', 'UserController@showRecoveryPage')->name('recovery_page');
Route::post('/recovery', 'UserController@recoveryAccount')->name('recovery_account');
Route::get('/alluser', 'UserController@index')->name('all_user');
Route::get('/logout', 'UserController@logout')->name('logout');
Route::get('/pizzadetail/{pizza_id}', 'PizzaController@show')->name('pizza_detail');
Route::post('/createpizza', 'PizzaController@store')->name('create_pizza');
Route::get('/createpizza', 'PizzaController@create')->name('create_pizza_page');
Route::post('/updatepizza/{pizza_id}', 'PizzaController@update')->name('update_pizza');
Route::get('/updatepizza/{pizza_id}', 'PizzaController@edit')->name('update_pizza_page');
Route::post('/deletepizza/{pizza_id}', 'PizzaController@destroy')->name('delete_pizza');
Route::get('/deletepizza/{pizza_id}', 'PizzaController@delete')->name('delete_pizza_page');
Route::any('/searchpizza', 'PizzaController@search')->name('search_pizza');

Route::get('/transaction_history/{user_id}', 'TransactionController@viewAllTransactionByUserId')->name('transaction_history');
Route::get('/transaction_detail/{transaction_id}', 'TransactionController@viewAllDetailTransactionById')->name('transaction_detail');
Route::get('/transaction_history/{user_id}', 'TransactionController@viewAllTransactionByUserId')->name('transaction_history');
Route::get('/all_transaction', 'TransactionController@viewAllTransaction')->name('all_transaction');

Route::get('/cart/{user_id}', 'CartController@viewCartByUserId')->name('cart');
Route::post('/update_quantity/{cart_id}/{user_id}', 'CartController@updateQuantity');
Route::post('/delete_cart/{cart_id}/{user_id}', 'CartController@deleteCart');
Route::post('/checkout/{user_id}', 'CartController@checkout');
Route::post('/add_cart/{pizza_id}', 'CartController@addCart');
