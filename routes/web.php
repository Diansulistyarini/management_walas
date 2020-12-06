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
    return view('landingpage');
});

Route::get('/coba', function () {
    return view('layouts.app');
});

Route::group(['prefix' => 'admin'], function () {
    'Voyager'::routes();
});

'Auth'::routes();

Route::get('/tampil' , 'DashController@main')->name('main');

Route::get('/home' , 'DashController@showkelas')->name('dash');
Route::post('/manage', 'DashController@check');

// Keuangan 
Route::get('/keuangannn', 'DashController@show');
Route::put('/keuangan/update/{id}', 'keuanganController@update');
Route::post('/keuangan/tambah', 'keuanganController@tambah');
Route::get('/keuangan/hapus/{id}', 'keuanganController@hapus');
Route::get('/keuangan/cetak_pdf', 'DashController@kas_pdf');
Route::get('/keuangan/export_excel', 'DashController@akas_excel');

// ADM
Route::get('/adm', 'DashController@showadm');
Route::post('/adm/tambah', 'AdmController@store');
Route::put('/adm/update/{id}', 'AdmController@update');
Route::get('/adm/hapus/{id}', 'AdmController@hapus');
Route::get('/adm/cetak_pdf', 'DashController@adm_pdf');
Route::get('/adm/export_excel', 'DashController@adm_excel');

// Absensi 
Route::get('/absen', 'dashController@showabsen');
Route::post('/absen/tambah', 'AbsensiController@tambah');
Route::get('/absen/hapus/{id}', 'AbsensiController@hapus');
Route::put('/absen/update/{id}', 'AbsensiController@update');
Route::get('/absen/cetak_pdf', 'DashController@cetak_pdf');
Route::get('/absen/export_excel', 'DashController@absen_excel');


// kasus siswa
Route::get('/kasus', 'DashController@showkasus');
Route::post('/kasus/tambah', 'KasusController@store');
Route::get('/kasus/hapus/{id}', 'KasusController@delete');
Route::put('/kasus/update/{id}', 'KasusController@update');
Route::get('/kasus/cetak_pdf', 'DashController@kasus_pdf');
Route::get('/kasus/export_excel', 'DashController@kasus_excel');


// Rapat Ortu
// Route::get('/rapat', 'DashController@showrapat');
// Route::post('/rapat/tambah', 'RapatController@store');
// Route::get('/rapat/hapus/{id}', 'RapatController@delete');
// Route::put('/rapat/update/{id}', 'RapatController@update');

// Jadwal 
Route::get('/jadwal', 'DashController@showjadwal');
Route::get('/jadwal/cetak_pdf', 'DashController@dtjadwal_pdf');
Route::get('/jadwal/export_excel', 'DashController@dtjadwal_excel');


// Data Siswa
Route::get('/siswa', 'DashController@showsiswa');
Route::get('/siswa/cetak_pdf', 'DashController@dtsiswa_pdf');
Route::get('/siswa/export_excel', 'DashController@dtsiswa_excel');

//Route Rapat Ortu
Route::get('/rapat', 'DashController@showrapat');
Route::post('/add_jadwal', 'RapatController@add_jadwal');
Route::get('/edit_jadwal/{id_jadwal}', 'RapatController@edit_jadwal');
Route::put('/update/{id_jadwal}', 'RapatController@upd_jadwal');
Route::get('/delete_jadwal/{id_menu}', 'RapatController@del_jadwal');
Route::get('/rapat/cetak_pdf', 'DashController@rapat_pdf');
Route::get('/rapat/export_excel', 'DashController@rapat_excel');
