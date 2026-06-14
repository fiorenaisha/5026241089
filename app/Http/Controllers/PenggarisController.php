<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function indexPenggaris()
    {
        $penggaris = DB::table('penggaris')->paginate(10);
        return view('indexPenggaris', ['penggaris' => $penggaris]);
    }

    public function tambah_penggaris()
    {
        return view('tambah_penggaris');
    }

    public function store_penggaris(Request $request)
    {
        DB::table('penggaris')->insert([
            'merkpenggaris'  => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia'       => $request->tersedia
        ]);
        return redirect('/penggaris');
    }

    public function edit_penggaris($id)
    {
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $id)->get();
        return view('edit_penggaris', ['penggaris' => $penggaris]);
    }

    public function update_penggaris(Request $request)
    {
        DB::table('penggaris')->where('kodepenggaris', $request->id)->update([
            'merkpenggaris'  => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia'       => $request->tersedia
        ]);
        return redirect('/penggaris');
    }

    public function hapus_penggaris($id)
    {
        DB::table('penggaris')->where('kodepenggaris', $id)->delete();
        return redirect('/penggaris');
    }

    public function cari_penggaris(Request $request)
    {
        $cari = $request->cari;

        $penggaris = DB::table('penggaris')
            ->where('merkpenggaris', 'like', "%" . $cari . "%")
            ->paginate();

        return view('indexPenggaris', ['penggaris' => $penggaris]);
    }
}
