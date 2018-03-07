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

// Maklumat users
// Route paparkan senarai users
Route::get('/senarai-users', 'UsersController@index')->name('users.index');
// Route paparkan borang tambah user baru
Route::get('/senarai-users/add', 'UsersController@create')->name('users.create');
// Route untuk proses data borang dan simpan rekod ke dalam table users
Route::post('/senarai-users/add', 'UsersController@store')->name('users.store');
// Route untuk paparkan maklumat user berdasarkan ID beliau
Route::get('/senarai-users/{id}', 'UsersController@show')->where('id', '[0-9]+')->name('users.show');
// Route untuk paparkan borang edit user berdasarkan ID beliau
Route::get('/senarai-users/{id}/edit', 'UsersController@edit')->where('id', '[0-9]+')->name('users.edit');
// Route untuk proses datang borang dan kemaskini rekod ke dalam table users berdasarkan ID user yang dipilih.
Route::patch('/senarai-users/{id}/edit', 'UsersController@update')->where('id', '[0-9]+')->name('users.update');
// Route untuk menghapuskan rekod berdasarkan ID
Route::delete('/senarai-users/{id}', 'UsersController@destroy')->where('id', '[0-9]+')->name('users.destroy');