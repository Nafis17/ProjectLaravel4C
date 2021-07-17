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
route::get('mahasiswa', 'mahasiswaController@index')->name('mahasiswa');
route::get('mahasiswa-create', 'mahasiswaController@create')->name('mahasiswa.tambah');
route::post('simpan-data-mahasiswa', 'mahasiswaController@store')->name('simpan.mahasiswa');

route::get('edit-mahasiswa/{id}', 'mahasiswaController@edit')->name('mahasiswa.edit');
route::post('update-mahasiswa/{id}', 'mahasiswaController@update')->name('update.mahasiswa');
route::get('hapus-mahasiswa/{id}', 'mahasiswaController@destroy')->name('mahasiswa.hapus');

//Route Makul
Route::get('makul', 'makulController@index')->name('makul');;
Route::get('tambah-makul', 'makulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'makulController@store')->name('simpan.makul');
Route::get('edit-makul/{id}', 'makulController@edit')->name('edit.makul');
Route::post('update-makul/{id}', 'makulController@update')->name('update.makul');
Route::get('hapus-makul/{id}', 'makulController@del')->name('hapus.makul');

//Route Nilai
Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('nilai-create', 'NilaiController@create')->name('nilai.create');
Route::post('nilai-simpan', 'NilaiController@store')->name('nilai.simpan');
Route::get('nilai-edit/{id}', 'NilaiController@edit')->name('nilai.edit');
Route::post('nilai-update/{id}', 'NilaiController@update')->name('nilai.update');
Route::get('nilai-hapus/{id}', 'NilaiController@destroy')->name('nilai.hapus');