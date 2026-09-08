<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // <-- Pastikan ini ada (bawaan)
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class BarangController extends Controller
{
    public function tampil()
    {
        $barangs = Barang::All();
        return view('barang.daftar', ['barangs' => $barangs]);
    }

    public function create()
    {
        $kategoris = DB::table('kategoris')->get();
        
        return view('barang.create', ['kategoris' => $kategoris]);
    }

    public function hapus(Barang $barang) {
        try {
            $barang->delete();

            return redirect('/daftar-barang')
                ->with('success', 'Barang berhasil dihapus.');
            
        } catch (\Exception $e) {

            return redirect('/daftar-barang')
                ->with('error', 'Barang gagal dihapus.');
        }
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
    public function ubah(Barang $barang) {
        $kategoris = DB::table('kategoris')->get();
        return view('barang.ubah', ['barang' => $barang, 'kategoris' => $kategoris]);
    }

     public function update(Request $request, Barang $barang) {    
        try {
            $barang->nama = $request->get('nama');
            $barang->harga = $request->get('harga');
            $barang->stok = $request->get('stok');
            $barang->kategori_id = $request->get('kategori_id');

            $barang->save();

            return redirect('/daftar-barang')
                ->with('success', 'Barang berhasil diperbarui.');

        } catch (\Exception $e) {

            return redirect('/daftar-barang')
                ->with('error', 'Barang gagal diperbarui.');
        }
    }
}
