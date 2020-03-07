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

//Authentication
Route::get('/', 'AuthController@login');
Route::post('/cekLogin', 'AuthController@cekLogin');
Route::get('/dashboard', 'AuthController@index');
Route::get('/logout', 'AuthController@logout');

//Profile
Route::get('/profil', 'ProfilController@index');
Route::post('/profil/updateProfil', 'ProfilController@updateProfil');

//Admin Account
Route::get('/pic', 'UserController@user');
Route::get('/pic/add', 'UserController@tambah_user');
Route::post('/pic/save', 'UserController@save_user');
Route::get('/pic/edit/{id}', 'UserController@edit_user');
Route::post('/pic/update', 'UserController@update_user');
Route::get('/pic/delete/{id}', 'UserController@delete_user');

//Admin Statistic
Route::get('/statistik', 'StatistikController@index');

//User Backlink
Route::get('/backlink', 'BacklinkController@index_user');

//Admin Backlink
Route::get('/a/backlink', 'BacklinkController@index');
Route::get('/a/backlink/add', 'BacklinkController@tambah_backlink');
Route::post('/a/backlink/import', 'BacklinkController@import');
Route::post('/a/backlink/save', 'BacklinkController@save_backlink');

//Recommendation
Route::get('/rekomendasi', 'RekomController@index');

//Tiket Bantuan
Route::get('/tiket-bantuan', 'TiketBantuanController@index');