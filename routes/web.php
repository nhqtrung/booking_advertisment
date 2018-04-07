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

Route::group(['prefix' => 'admin'], function() {
    
    Route::get('/', function() {
        return view('Admin.dashboard');
    });

    Route::resource('contract', 'ContractController');
    
    Route::resource('client', 'ClientController');
    
    Route::resource('contract-types', 'ContractTypeController');
    
    Route::resource('rule-types', 'RuleTypeController');
    
    Route::resource('rule', 'RuleController');
    
    Route::resource('category-product', 'CategoryProductController');
    
    Route::resource('product', 'ProductController');
    
    Route::resource('product-booking', 'ProductBookingController');
    
    Route::resource('time-booking', 'TimeBookingController');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
