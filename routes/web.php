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
Route::get('/home', function () {
    return view('layout/home');
});
use App\Http\Controllers\C_publik;
Route::get('/anggota','C_publik@anggotaindex');
Route::get('/asal','C_publik@asalindex');
Route::get('/buku','C_publik@bukuindex');
Route::get('/bahasa','C_publik@bahasaindex');
Route::get('/pegawai','C_publik@pegawaiindex');
Route::get('/penerbit','C_publik@penerbitindex');
Route::get('/eksemplar','C_publik@eksindex');
Route::get('/jenis','C_publik@jenisindex');

