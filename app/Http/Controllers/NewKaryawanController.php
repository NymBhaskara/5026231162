<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table newkaryawan
    	$newkaryawan = DB::table('newkaryawan')->get();

    	// mengirim data semen ke view index
    	return view('indexnewkaryawan',['newkaryawan' => $newkaryawan]);

    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {

	// memanggil view tambah
	return view('tambahnewkaryawan');

    }

    // method untuk insert data ke table newkaryawan
    public function store(Request $request)
    {
	// insert data ke table newkaryawan
	DB::table('newkaryawan')->insert([
        'NIP' => $request->NIP,
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman eas
	return redirect('/eas');
    }

    // update data newkaryawan
    public function update(Request $request)
    {
	// update data newkaryawan
	DB::table('newkaryawan')->where('NIP',$request->id)->update([
        'NIP' => $request->NIP,
		'nama' => $request->namalengkap,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman eas
	return redirect('/eas');
    }

    // method untuk hapus data karyawan
    public function hapus($id)
    {
	// menghapus data karyawan berdasarkan id yang dipilih
	DB::table('newkaryawan')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman eas
	return redirect('/eas');
    }
}
