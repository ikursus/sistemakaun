<?php

Route::get('/', 'PagesController@index');
Route::get('/hubungi', 'PagesController@hubungi');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
