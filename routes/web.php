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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'SiswaController@home')->name('home');
Route::get('export', 'SiswaController@export')->name('export.siswa');
Route::post('home/create', 'SiswaController@store')->name('siswa.create');
Route::get('home/{siswa}/hapus', 'SiswaController@destroy')->name('siswa.delete');
Route::post('import', 'SiswaController@import')->name('import.siswa');