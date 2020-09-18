<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
        return view('/auth/login');
    });
// Route::get('/', 'IndexController@index');

Auth::routes();

Route::get('/dashboard', 'User\IndexController@index')->name('home')->middleware('auth');
Route::prefix('admin')->group(function () {
    // Route::get('users', function () {
    //     // Matches The "/admin/users" URL
    // });
    Route::get('/', 'Admin\AdminController@index')->name('admin.home')->middleware('isadmin');
    Route::get('manager/akun', 'Admin\AkunController@index')->name('admin')->middleware('isadmin');
    Route::get('manager/akun/{user}/edit', 'Admin\AkunController@edit')->middleware('isadmin');
    Route::post('manager/akun/{user}/update', 'Admin\AkunController@update')->middleware('isadmin');
    Route::delete('manager/akun/{user}/hapus', 'Admin\AkunController@destroy')->middleware('isadmin');

    Route::get('web/mystore', 'Admin\StoreController@index')->name('store')->middleware('isadmin');
    Route::get('web/loyalty', 'Admin\LoyaltyController@index')->name('loyaltypoint')->middleware('isadmin');
    

});

Route::resource('products','ProductController');