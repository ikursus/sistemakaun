<?php

Route::get('/', 'PagesController@index');
Route::get('/hubungi', 'PagesController@hubungi');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Maklumat Akaun
Route::post('/tambah-maklumat-akaun', 'AkaunController@simpan')->name('akaun.simpan');
