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

Route::get('/sale', 'App\Http\Controllers\SaleCustomerController@index');
Route::get('/sale/lists', 'App\Http\Controllers\SaleCustomerController@index');

Route::get('/sale/add', 'App\Http\Controllers\SaleCustomerController@add');
Route::post('/sale/add', 'App\Http\Controllers\SaleCustomerController@do_add');

Route::get('/sale/edit/{id}', 'App\Http\Controllers\SaleCustomerController@edit');
Route::post('/sale/edit/{id}', 'App\Http\Controllers\SaleCustomerController@do_edit');

Route::get('/sale/delete/{id}', 'App\Http\Controllers\SaleCustomerController@delete');

Route::get('/report', 'App\Http\Controllers\ReportController@index');
Route::get('/report/lists', 'App\Http\Controllers\ReportController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@index');
Route::get('/student/lists', 'App\Http\Controllers\StudentController@index');
