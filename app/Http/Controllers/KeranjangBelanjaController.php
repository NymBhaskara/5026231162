<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function indexkeranjangbelanja(){

        $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

    	return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah keranjang belanja
    public function belikeranjangbelanja()
    {

        // memanggil view tambah
        return view('belikeranjangbelanja');

    }
    // method untuk insert data ke table keranjang belanja
    public function storekeranjangbelanja(Request $request)
    {

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        return redirect('/keranjangbelanja');
    }

    // update data keranjang belanja
    public function updatekeranjangbelanja(Request $request)
    {
        // update data keranjang belanja
        DB::table('keranjangbelanja')->where('ID',$request->id)->update([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);
        // alihkan halaman ke halaman keranjang belanja
        return redirect('/keranjangbelanja');
    }


    public function batalkeranjangbelanja($ID)
    {
        DB::table('keranjangbelanja')->where('ID',$ID)->delete();

        return redirect('/keranjangbelanja');
    }

}
