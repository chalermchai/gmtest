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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/customer', function () {
//     // return view('customer');
//     // Route::get('/customer', 'CustomerController@index')->name('customer');
// });

Route::get('/customer', 'App\Http\Controllers\CustomerController@index');
Route::get('/customer/lists', 'App\Http\Controllers\CustomerController@index');

Route::get('/customer/add', 'App\Http\Controllers\CustomerController@add');
Route::post('/customer/add', 'App\Http\Controllers\CustomerController@do_add');

Route::get('/customer/edit/{id}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customer/edit/{id}', 'App\Http\Controllers\CustomerController@do_edit');

Route::get('/customer/delete/{id}', 'App\Http\Controllers\CustomerController@delete');
