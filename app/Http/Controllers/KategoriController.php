<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
// use DB;

class KategoriController extends Controller
{
    public function tampil()
    {
        // $kategoris = DB::table('kategoris')->get();
        $kategoris = Kategori::all();
        return view('kategori.daftar', ['kategoris' => $kategoris]);
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function simpan(Request $request){
        // DB::table('kategoris')->insert([
        //     'nama' => $request->get('nama'),
        //     'deskripsi' => $request->get('deskripsi'),
        // ]);

        // return redirect('/daftar-kategori');
        $kategori = new Kategori;
        $kategori->nama = $request->get('nama');
        $kategori->deskripsi = $request->get('deskripsi');
        $kategori->save();

        return redirect('/daftar-kategori');
    }

    public function hapus(Kategori $kategori) {
        $kategori->delete();
        return redirect('/daftar-kategori');
    }

    public function ubah(Kategori $kategori) {
        return view('kategori.ubah', ['kategori' => $kategori]);
    }

     public function update(Request $request, Kategori $kategori) {
        
        $kategori->nama = $request->get('nama');
        $kategori->deskripsi = $request->get('deskripsi');
        $kategori->save();
        
        return redirect('/daftar-kategori');
    }

}
