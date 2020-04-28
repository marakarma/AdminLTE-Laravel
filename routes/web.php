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

Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    // Route::get('users', function () {
    //     // Matches The "/admin/users" URL
    // });
    Route::get('/', 'Admin\AdminController@index')->name('admin')->middleware('isadmin');
    
});