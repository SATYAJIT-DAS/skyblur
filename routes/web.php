<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/','FrontendController@homepage')->name('homepage');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('user.home');

Route::prefix('/admin')->namespace("Admin")->group(function () {
    Route::match(['get','post'],'/','AdminController@login')->name('admin.login');
    Route::group(['middleware' => ['admin']],function(){
        Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
        Route::get('settings', 'AdminController@settings')->name('admin.settings');
        Route::get('logout', 'AdminController@logout')->name('admin.logout');
    });

});
