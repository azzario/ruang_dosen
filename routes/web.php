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

// Dosen pages
Route::get('/', 'DosenPagesController@getIndex');
Route::get('/login/dosen', 'DosenPagesController@getLogin');
Route::post('/login/dosen', 'DosenPagesController@doLogin');
Route::get('/logout', 'DosenPagesController@doLogout');
Route::get('/profil', 'DosenPagesController@getProfile');

//Kelas Dosen
Route::get('/kelas/dosen', 'KelasController@index');

//Jadwal Dosen
Route::get('/jadwal/dosen', 'JadwalController@index');
Route::get('/jadwal/create/dosen', 'JadwalController@create');