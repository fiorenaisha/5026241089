<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    public function index()
    {
        $nilai_peserta = DB::table('nilai_peserta')->paginate(10);
        return view('indexNilaiPeserta', ['nilai_peserta' => $nilai_peserta]);
    }

    public function tambah()
    {
        return view('tambah_nilaipeserta');
    }

    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta'   => $request->nopeserta,
            'nilaiteori'  => $request->nilaiteori,
            'nilaipraktek'=> $request->nilaipraktek,
        ]);
        return redirect('/eas');
    }
}
