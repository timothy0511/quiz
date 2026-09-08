<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datapelanggan = [
            ['nama_pelanggan' => 'Budi', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama_pelanggan' => 'Ani', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama_pelanggan' => 'Citra', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama_pelanggan' => 'Dewi', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama_pelanggan' => 'Eka', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama_pelanggan' => 'Fafa', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
        ];

        DB::table('pelanggans')->insert($datapelanggan);
            
    }
}
