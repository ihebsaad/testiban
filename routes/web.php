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


/***   Wallets   ***/
Route::get('/wallets', array('as' => 'wallets','uses' => 'WalletsController@index'));
Route::get('/wallets/show/{id}', 'WalletsController@show');
Route::get('/wallets/add', 'WalletsController@create');
Route::get('/wallets/store', 'WalletsController@store');
//Route::get('/wallets/balance/{id}/{date}', 'WalletsController@walletByDate');
Route::get('/wallets/showBalance', 'WalletsController@showBalance');
Route::get('/wallets/balance', 'WalletsController@balance');
//Route::get('/wallets/balance/{id}/{date}', 'WalletsController@walletByDate');


/***   Financial Movements   ***/
Route::get('/movements', array('as' => 'movements','uses' => 'MovementsController@index'));
Route::get('/movements/show/{id}', 'MovementsController@show');
 