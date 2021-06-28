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

//Route Mahasiswa
Route::get('/home', 'HomeController@index')->name('home');
Route::get('mahasiswa', 'mahasiswaController@index')->name('index');
Route::get('tambah-mahasiswa', 'mahasiswaController@create')->name('tambah.mahasiswa');
Route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('edit.mahasiswa');
Route::post('simpan-mahasiswa','mahasiswaController@store')->name('simpan.mahasiswa');
Route::post('update-mahasiswa/{id}','mahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'mahasiswaController@del')->name('hapus.mahasiswa');

//Route Makul
Route::get('makul', 'makulController@index')->name('makul');;
Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@store')->name('simpan.makul');
Route::get('edit-makul/{id}', 'makulController@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'makulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulController@del')->name('hapus.makul');