<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table semen
    	$karyawan = DB::table('karyawan')->get();

    	// mengirim data semen ke view index
    	return view('indexkaryawan',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan view form tambah semen
    public function tambah()
    {

	// memanggil view tambah
	return view('tambahkaryawan');

    }

    // method untuk insert data ke table semen
    public function store(Request $request)
    {
	// insert data ke table semen
	DB::table('karyawan')->insert([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => strtoupper($request->namalengkap),
		'divisi' => $request->divisi,
		'departemen' => strtolower($request->departemen)
	]);
	// alihkan halaman ke halaman semen
	return redirect('/karyawan');

    }

    // method untuk edit data semen
    public function edit($id)
    {
	// mengambil data semen berdasarkan id yang dipilih
	$karyawan = DB::table('karyawan')->where('kodepegawai',$id)->get();
	// passing data semen yang didapat ke view edit.blade.php
	return view('editkaryawan',['karyawan' => $karyawan]);

    }

    // update data semen
    public function update(Request $request)
    {
	// update data semen
	DB::table('karyawan')->where('kodepegawai',$request->id)->update([
        'kodepegawai' => $request->kodepegawai,
		'namalengkap' => strtoupper($request->namalengkap),
		'divisi' => $request->divisi,
		'departemen' => strtolower($request->departemen)
	]);
	// alihkan halaman ke halaman semen
	return redirect('/karyawan');
    }

    // method untuk hapus data semen
    public function hapus($id)
    {
	// menghapus data semen berdasarkan id yang dipilih
	DB::table('karyawan')->where('kodepegawai',$id)->delete();

	// alihkan halaman ke halaman semen
	return redirect('/karyawan');
    }

    // Method untuk mencari data semen
    public function cari(Request $request)
	{
	// menangkap data pencarian
	$cari = $request->cari;

    // mengambil data dari table semen sesuai pencarian data
	$karyawan = DB::table('karyawan')
	->where('namalengkap','like',"%".$cari."%")
	->paginate();

    // mengirim data semen ke view index
	return view('indexkaryawan',['karyawan' => $karyawan]);

	}
}
