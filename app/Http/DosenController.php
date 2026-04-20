<?php
//package
namespace App\Http\Controllers;
//import
use Illuminate\Http\Request;

class DosenController extends Controller
{

public

public function biodata() {
        	$nama = "Diki Alfarabi Hadi";
    	return view('biodata',['nama' => $nama]);
}
