<?php

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::group(['middleware'=> ['owner']], function () {
	Route::resource('/admin','AdminController');
});

Route::group(['middleware'=> ['admin']], function () {
	Route::resource('/rekap','ChartController');
	Route::resource('/kasir','KasirController');
	Route::post('/bayar','KasirController@bayar');
	Route::resource('/dapur','DapurController');
	Route::resource('/menu','MenuController');
});

Route::group(['middleware'=> ['auth']], function () {
	Route::resource('/akun','AkunController');
	Route::resource('/pesan','PemesananController');
	Route::resource('/cart','CartController');
});

//Facebook Socialite
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

