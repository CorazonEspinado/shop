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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function () {

    Route::resource('qrcodes', 'QrcodeController');
    Route::resource('roles', 'RoleController');
    Route::group(['middleware' => 'isManager'], function () {
        Route::resource('transactions', 'TransactionController');
        Route::group(['middleware' => 'isAdmin'], function () {
            Route::resource('accounts', 'AccountController');
            Route::resource('accountHistories', 'AccountHistoryController');
            Route::resource('users', 'UserController')->middleware('isAdmin');
        });
    });
});



