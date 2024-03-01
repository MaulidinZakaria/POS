<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'penjualan_kode' => 'JL001',
                'pembeli' => 'Budi',
                'penjualan_tanggal' => '2024-02-10',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'penjualan_kode' => 'JL002',
                'pembeli' => 'Siti',
                'penjualan_tanggal' => '2024-02-12',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'penjualan_kode' => 'JL003',
                'pembeli' => 'Agung',
                'penjualan_tanggal' => '2024-02-14',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'penjualan_kode' => 'JL004',
                'pembeli' => 'Rini',
                'penjualan_tanggal' => '2024-02-16',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'penjualan_kode' => 'JL005',
                'pembeli' => 'Slamet',
                'penjualan_tanggal' => '2024-02-18',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'penjualan_kode' => 'JL006',
                'pembeli' => 'Putri',
                'penjualan_tanggal' => '2024-02-20',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'penjualan_kode' => 'JL007',
                'pembeli' => 'Hadi',
                'penjualan_tanggal' => '2024-02-22',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'penjualan_kode' => 'JL008',
                'pembeli' => 'Dewi',
                'penjualan_tanggal' => '2024-02-24',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'penjualan_kode' => 'JL009',
                'pembeli' => 'Joko',
                'penjualan_tanggal' => '2024-02-25',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'penjualan_kode' => 'JL010',
                'pembeli' => 'Nia',
                'penjualan_tanggal' => '2024-02-27',
            ]
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
