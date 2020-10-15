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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');



// Admin Routes
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('inquiries', 'AdminController@inquiries')->name('admin.inquiries');
    Route::get('client_plot_registeration', 'AdminController@client_plot_reg')->name('admin.client_plot_reg');
    Route::get('installments', 'AdminController@installments')->name('admin.installments');


});
