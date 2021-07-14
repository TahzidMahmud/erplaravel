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

Route::get('/', function () {
    return view('dashboard');
});
// main account routes
Route::resource('accounts','MainAccountController');
Route::get('/last-mainacc/{type}','MainAccountController@lastacc');

// sub accoutn routes
Route::resource('accounts.subaccounts', 'SubAccountController');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
