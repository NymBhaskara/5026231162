<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PageCounterController extends Controller
{
    public function show()
    {
    	// mengambil data dari page counter
    	DB::table('pagecounter')->where('id', 1)->increment('jumlah');

        //update
        $jumlah = DB::table('pagecounter')->where('id', 1)->value('jumlah');

    	// mengirim data ke view
    	return view('/pagecounter',['jumlah' => $jumlah]);

    }
}
