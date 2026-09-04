<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- Pastikan ini ada (bawaan)
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function tampil()
    {
        $barangs = DB::table('barangs')->get();
        return view('barang.daftar', ['barangs' => $barangs]);
    }

    public function create()
    {
        $kategoris = DB::table('kategoris')->get();
        
        return view('barang.create', ['kategoris' => $kategoris]);
    }

    public function simpan(Request $request)
    {
        DB::table('barangs')->insert([
            'nama'        => $request->nama,
            'harga'       => $request->harga,
            'stok'        => $request->stok,
            'kategori_id' => $request->kategori_id,
            'created_at'  => now(),
            'updated_at'  => now()
        ]);

        return redirect('/daftar-barang');
    }
}
