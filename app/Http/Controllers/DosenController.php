<?php
// package
namespace App\Http\Controllers;
// import
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
    {
        return "<h1> Halo ini adalah method index, dalam controller DosenController </h1> di tutorial laravel www.malasngoding.com";
    }

    public function biodata(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 31;
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}
