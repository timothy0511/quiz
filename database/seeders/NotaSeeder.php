<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datanota = [
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 1,
                'tanggal' => '2026-09-01',
                'total' => 45000,
                'metode_pembayaran' => 'Cash',
            ],
            [
                'pegawai_id' => 2,
                'pelanggan_id' => 2,
                'tanggal' => '2026-09-02',
                'total' => 15000,
                'metode_pembayaran' => 'QRIS',
            ],
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 3,
                'tanggal' => '2026-09-03',
                'total' => 2000,
                'metode_pembayaran' => 'Cash',
            ],
            [
                'pegawai_id' => 2,
                'pelanggan_id' => 4,
                'tanggal' => '2026-09-04',
                'total' => 3000,
                'metode_pembayaran' => 'QRIS',
            ],
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 5,
                'tanggal' => '2026-09-05',
                'total' => 3000,
                'metode_pembayaran' => 'Cash',
            ],
            [
                'pegawai_id' => 2,
                'pelanggan_id' => 1,
                'tanggal' => '2026-09-06',
                'total' => 5000,
                'metode_pembayaran' => 'QRIS',
            ],
            [
                'pegawai_id' => 1,
                'pelanggan_id' => 2,
                'tanggal' => '2026-09-07',
                'total' => 7000,
                'metode_pembayaran' => 'Cash',
            ],
        ];

        DB::table('notas')->insert($datanota);
    }
}
