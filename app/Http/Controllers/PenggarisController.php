<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggarisController extends Controller
{
    //menampilkan form tambah
    public function tambah_penggaris()
    {
        return view('tambah_penggaris');
    }
}
