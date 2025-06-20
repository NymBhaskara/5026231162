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
        $request->validate([
            'NIP' => 'required|size:9|unique:newkaryawan,NIP',
            'nama' => 'required|max:50',
            'pangkat' => 'required|max:15',
            'gaji' => 'required|integer'
        ],
        [
            'NIP.required' => 'NIP wajib diisi.',
            'NIP.size' => 'NIP harus terdiri dari 9 karakter.',
            'NIP.unique' => 'NIP sudah digunakan.',
            'nama.required' => 'Nama wajib diisi.',
            'pangkat.required' => 'Pangkat wajib diisi.',
            'gaji.required' => 'Gaji wajib diisi.',
            'gaji.integer' => 'Gaji harus berupa angka.'
        ]);
	// insert data ke table newkaryawan
	    DB::table('newkaryawan')->insert([
            'NIP' => $request->NIP,
		    'nama' => $request->nama,
		    'pangkat' => $request->pangkat,
		    'gaji' => $request->gaji
	    ]);
	// alihkan halaman ke halaman eas
	return redirect('/eas')->with('success', 'Data berhasil ditambahkan');
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
