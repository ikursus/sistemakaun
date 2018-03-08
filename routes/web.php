<?php
/*
 * Route berkaitan Halaman Umum
 */
Route::get('/', 'PagesController@index');
Route::get('/hubungi', 'PagesController@hubungi');

/*
 * Route berkaitan Login / Logout / Register / Password Reset
 */
Auth::routes();

/*
 * Route berkaitan Ruangan Dashboard
 */
// Papar maklumat account details
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Dapatkan rekod dari account details
Route::get('/dashboard/datatables', 'DashboardController@datatables')->name('dashboard.datatables');


/*
 * Route berkaitan Akaun
 */

// Route untuk proses data borang dari modal dashboard dan simpan rekod ke dalam table akaun
Route::post('/akaun/add', 'AkaunController@simpan')->name('akaun.simpan');
// Route untuk paparkan maklumat detail akaun berdasarkan jenis akaun
Route::get('/akaun/{jenis_akaun}', 'AkaunController@show')->name('akaun.show');

/*
 * Route berkaitan Data Unit Kewangan
 */

// Route paparkan template tambah rekod data unit kewangan
Route::get('/data-unit-kewangan/add', 'DukController@create')->name('duk.create');
// Route untuk proses data borang dan simpan rekod ke dalam table data unit kewangan (duk)
Route::post('/data-unit-kewangan/add', 'DukController@store')->name('duk.store');
// Route untuk paparkan maklumat duk berdasarkan ID
Route::get('/data-unit-kewangan/{id}', 'DukController@show')->name('duk.show');
// Route untuk proses datang borang dan kemaskini rekod ke dalam table duk berdasarkan ID yang dipilih.
Route::get('/data-unit-kewangan/{id}/edit', 'DukController@edit')->name('duk.edit');
// Route untuk proses datang borang dan kemaskini rekod ke dalam table duk berdasarkan ID yang dipilih.
Route::patch('/data-unit-kewangan/{id}/edit', 'DukController@update')->name('duk.update');
// Route untuk menghapuskan rekod duk berdasarkan ID
Route::delete('/data-unit-kewangan/{id}', 'DukController@destroy')->where('id', '[0-9]+')->name('duk.destroy');

/*
 * Route berkaitan Maklumat User
 */

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
