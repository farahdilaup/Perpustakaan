<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_publik extends Controller
{
    public function anggotaindex()
    {
    	$anggota = DB::table('anggota')->get();
    	return view('Anggota/index',['anggota' => $anggota]);
    } 

    public function asalindex()
    {
    	$asal = DB::table('asal')->get();
    	return view('Asal/index',['asal' => $asal]);
    } 

    public function bahasaindex()
    {
    	$bahasa = DB::table('bahasa')->get();
    	return view('Bahasa/index',['bahasa' => $bahasa]);
    } 

    public function bukuindex()
    {
    	$buku = DB::table('buku')->get();
    	return view('Buku/index',['buku' => $buku]);
    } 

    public function pegawaiindex()
    {
    	$pegawai = DB::table('pegawai')->get();
    	return view('Pegawai/index',['pegawai' => $pegawai]);
    } 

    public function eksindex()
    {
    	$eksemplar_buku = DB::table('eksemplar_buku')->get();
    	return view('Eksemplar_buku/index',['eksemplar_buku' => $eksemplar_buku]);
    } 

    public function jenisindex()
    {
    	$jenis_buku = DB::table('jenis_buku')->get();
    	return view('Jenis_buku/index',['jenis_buku' => $jenis_buku]);
    } 
    public function penerbitindex()
    {
    	$penerbit = DB::table('penerbit')->get();
    	return view('Penerbit/index',['penerbit' => $penerbit]);
    } 
}
