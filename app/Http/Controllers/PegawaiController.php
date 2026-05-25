<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    //
    public function index($nama){

    	return $nama;

    }

     public function formulir(){

    	return view('formulir');

}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}

public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $umur = $request->input('umur');
        return "Nama : " . $nama . ",<br>Umur : " . $umur .
        ", <br>Alamat : " . $alamat  ;
}
}
