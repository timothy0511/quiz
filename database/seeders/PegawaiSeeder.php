<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPassword = Hash::make('123456');

        $datapegawai = [
            ['nama' => 'Budi', 'jabatan' => 'Owner', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Ani', 'jabatan' => 'Admin', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Citra', 'jabatan' => 'Gudang', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Dewi', 'jabatan' => 'Owner', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Eka', 'jabatan' => 'Admin', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Fafa', 'jabatan' => 'Gudang', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Gita', 'jabatan' => 'Owner', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
            ['nama' => 'Hani', 'jabatan' => 'Admin', 'nomor_hp' => '123456789', 'email' => 'budi@gmail.com', 'password' => $defaultPassword, 'alamat' => 'Jl. Sudirman No. 1'],
        ];

        DB::table('pegawais')->insert($datapegawai);
    }
}
