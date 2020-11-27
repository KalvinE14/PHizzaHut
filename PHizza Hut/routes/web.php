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

Route::post('/login', 'UserController@doLogin')->name('login');
Route::get('/login', 'UserController@showLoginPage')->name('login_page');

Route::post('/register', 'UserController@store')->name('register');
Route::get('/register', 'UserController@showRegisterPage')->name('register_page');

Route::get('/alluser', 'UserController@index');
Route::get('/pizzadetail/{pizza_id}', 'PizzaController@show')->name('pizza_detail');


