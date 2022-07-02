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
Route::get('/home', 'HomeController@index')->name('home');
// buat barang
Route::get('/index','LaravelController@index');
Route::post('/tambah','LaravelController@tambah');
Route::get('/edit/{data}','LaravelController@edit');
Route::post('/update','LaravelController@update');
Route::get('/hapus/{data}','LaravelController@hapus');
//buat siswa
Route::get('/siswa','SiswaController@index');
Route::post('siswa/simpan','SiswaController@simpan');
Route::get('/ubah/{data}','SiswaController@edit');
Route::post('/holdup','SiswaController@update');
Route::get('/delete/{data}','SiswaController@delete');
//buat distributor
Route::get('/distributor','DistributorController@index');
Route::post('/distributor/tambah','DistributorController@tambah');
Route::get('/distributor/hapus/{id}','DistributorController@hapus');
Route::resource('penjualans','PenjualanController');
Route::resource('pelanggans','PelangganController');
Route::resource('barangs','BarangController');
Route::resource('jasas','JasaController');
Route::resource('pendaftarans','PendaftaranController');
Route::resource('mekaniks','MekanikController');
Route::resource('services','ServiceController');
Route::resource('kasirs','KasirController');