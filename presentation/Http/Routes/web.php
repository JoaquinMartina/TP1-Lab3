<?php

namespace Presentation\Http\Routes;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::Routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/customer', 'CustomerFormController@showForm')->name('customerForm');
Route::post('/customer', 'CustomerFormController@sendForm')->name('sendCustomerForm');

