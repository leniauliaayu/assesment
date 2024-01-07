<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa.index');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/{mahasiswa}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('/mahasiswa/{mahasiswa}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

Route::get('/prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/create', 'ProdiController@create')->name('prodi.create');
Route::post('/prodi', 'ProdiController@store')->name('prodi.store');
Route::get('/prodi/{prodi}/edit', 'ProdiController@edit')->name('prodi.edit');
Route::put('/prodi/{prodi}', 'ProdiController@update')->name('prodi.update');
Route::delete('/prodi/{prodi}', 'ProdiController@destroy')->name('prodi.destroy');

Route::get('/dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen/create', 'DosenController@create')->name('dosen.create');
Route::post('/dosen', 'DosenController@store')->name('dosen.store');
Route::get('/dosen/{dosen}/edit', 'DosenController@edit')->name('dosen.edit');
Route::put('/dosen/{dosen}', 'DosenController@update')->name('dosen.update');
Route::delete('/dosen/{dosen}', 'DosenController@destroy')->name('dosen.destroy');

Route::get('/matakuliah', 'MataKuliahController@index')->name('matakuliah.index');
Route::get('/matakuliah/create', 'MataKuliahController@create')->name('matakuliah.create');
Route::post('/matakuliah', 'MataKuliahController@store')->name('matakuliah.store');
Route::get('/matakuliah/{matakuliah}/edit', 'MataKuliahController@edit')->name('matakuliah.edit');
Route::put('/matakuliah/{matakuliah}', 'MataKuliahController@update')->name('matakuliah.update');
Route::delete('/matakuliah/{matakuliah}', 'MataKuliahController@destroy')->name('matakuliah.destroy');
