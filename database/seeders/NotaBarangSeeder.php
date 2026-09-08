<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datanotabarang = [
            ['nota_id' => 1, 'barang_id' => 1, 'jumlah' => 1, 'harga' => 25000, 'subtotal' => 25000],
            ['nota_id' => 1, 'barang_id' => 2, 'jumlah' => 1, 'harga' => 20000, 'subtotal' => 20000],
            ['nota_id' => 2, 'barang_id' => 3, 'jumlah' => 1, 'harga' => 15000, 'subtotal' => 15000],
            ['nota_id' => 3, 'barang_id' => 4, 'jumlah' => 1, 'harga' => 2000, 'subtotal' => 2000],
            ['nota_id' => 4, 'barang_id' => 5, 'jumlah' => 1, 'harga' => 3000, 'subtotal' => 3000],
            ['nota_id' => 5, 'barang_id' => 6, 'jumlah' => 1, 'harga' => 3000, 'subtotal' => 3000],
            ['nota_id' => 6, 'barang_id' => 7, 'jumlah' => 1, 'harga' => 5000, 'subtotal' => 5000],
            ['nota_id' => 7, 'barang_id' => 8, 'jumlah' => 1, 'harga' => 7000, 'subtotal' => 7000],
        ];

        DB::table('nota_barangs')->insert($datanotabarang);
    }
}
