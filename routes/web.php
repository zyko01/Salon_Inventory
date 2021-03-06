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
    return view('auth/login');
});

Auth::routes();



Route::Post('login/custom', [

    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' => 'admin'], function(){

    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::resource('items', 'ItemController');

    Route::resource('products', 'ProductController');

    // Route::resource('rebottledproducts', 'RebottledProductController');

    Route::resource('rebottleproducts', 'RebottleProductController');

    Route::resource('excess', 'ExcessController');

    Route::get('/summary', 'SummaryController@index')->name('summary');
});

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');
    
});