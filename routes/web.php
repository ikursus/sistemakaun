<?php
// Guest pages
Route::get('/', 'PagesController@index');
Route::get('/hubungi', 'PagesController@hubungi');

// Authentication
Auth::routes();

// Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

// Simpan Maklumat Akaun
Route::post('/tambah-maklumat-akaun', 'AkaunController@simpan')->name('akaun.simpan');
Route::get('/detail-akaun/{id}', 'AkaunController@show')->name('akaun.show');

// Tambah Data Unit Kewangan
Route::get('/tambah-duk', 'DukController@create')->name('duk.create');
Route::post('/tambah-duk', 'DukController@store')->name('duk.store');
