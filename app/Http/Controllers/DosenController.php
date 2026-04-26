<?php
// package
namespace App\Http\Controllers;

// import
use Illuminate\Http\Request;

class DosenController extends Controller
{
    // method lama
    public function index()
    {
        return "<h1> Halo ini adalah method index, dalam controller DosenController </h1> di tutorial laravel www.malasngoding.com";
    }

    public function biodata(){
        $nama = "Diki Alfarabi Hadi";
        $umur = 31;
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
        return view('biodata', ['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }

    public function menu(){
        return view('menu');
    }

    public function idx(){
        return view('index');
    }

    public function example(){
        return view('customfiles');
    }

    public function intro(){
        return view('intro');
    }

    public function linktree(){
        return view('linktree');
    }

    public function news(){
        return view('news');
    }

    public function pert5(){
        return view('pertemuan5');
    }

    public function responsive(){
        return view('responsive');
    }

    public function template(){
        return view('template');
    }

    public function nol89(){
        return view('089');
    }
}
