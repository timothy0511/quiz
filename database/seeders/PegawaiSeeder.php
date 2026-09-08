<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datapegawai = [
            ['nama' => 'Budi', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Ani', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Citra', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Dewi', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Eka', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Fafa', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Gita', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Hani', 'jabatan' => 'Manager', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'alamat' => 'Jl. Sudirman No. 1'],
        ];

        DB::table('pegawais')->insert($datapegawai);
    }
}
