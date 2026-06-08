<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiKuliahController extends Controller
{
    // Menampilkan halaman form tambah (tidak butuh data DB)
    public function tambah()
    {
        return view('tambah_nilaikuliah');
    }
}
