<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/siswa/simpan', 'SiswaController@simpan')->name('siswa.simpan');
Route::post('/siswa', 'SiswaController@prosesSimpan')->name('siswa.prosesSimpan');

Route::get('/datasiswa', 'SiswaController@tampil')->name('siswa.data');
Route::get('/siswa/{siswa}', 'SiswaController@detail');

Route::get('/siswa/hapus/{id}', 'SiswaController@hapus');

Route::get('/siswa/{siswa}/edit', 'SiswaController@edit');

Route::patch('/siswa/{siswa}', 'SiswaController@prosesedit')->name('siswa.proses');
