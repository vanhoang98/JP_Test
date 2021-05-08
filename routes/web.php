<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function() {
    Route::get('home', 'AdminController@index')->name('admin.home');
    Route::post('storePost', 'CategoryController@storePost')->name('admin.storePost');
    Route::patch('updatePost', 'CategoryController@updatePost')->name('admin.updatePost');
    Route::resource('categories', 'CategoryController')->except([
        'create',
        'show',
        'edit',
    ]);
});
