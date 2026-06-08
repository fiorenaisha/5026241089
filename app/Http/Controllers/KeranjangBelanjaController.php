<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    public function tambah()
    {
        return view('tambah_keranjangbelanja');
    }
}
