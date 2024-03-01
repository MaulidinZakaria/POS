<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'NASGOR',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MIGOR',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'ETH',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 5000,
                'harga_jual' => 100,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'EJRK',
                'barang_nama' => 'Es Jeruk',
                'harga_beli' => 6000,
                'harga_jual' => 100,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'HPSMG',
                'barang_nama' => 'HP Samsung',
                'harga_beli' => 3000000,
                'harga_jual' => 3500000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'HPXMI',
                'barang_nama' => 'HP Xiaomi',
                'harga_beli' => 2500000,
                'harga_jual' => 2750000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'SBM',
                'barang_nama' => 'Sabun Mandi',
                'harga_beli' => 5000,
                'harga_jual' => 6000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SMP',
                'barang_nama' => 'Shampo',
                'harga_beli' => 20000,
                'harga_jual' => 22000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'PSL2B',
                'barang_nama' => 'Pensil 2B',
                'harga_beli' => 3000,
                'harga_jual' => 3500,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'SPDL',
                'barang_nama' => 'Spidol',
                'harga_beli' => 4000,
                'harga_jual' => 5000,
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
