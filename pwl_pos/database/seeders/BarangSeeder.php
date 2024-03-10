<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'barang_kode' => 'Lenovo',
                'kategori_id' => 1,
                'barang_nama' => 'Lenovo Legion 5 Pro',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 2,
                'barang_kode' => 'HP',
                'kategori_id' => 1,
                'barang_nama' => 'HP Victus 16',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 3,
                'barang_kode' => 'Apple',
                'kategori_id' => 2,
                'barang_nama' => 'Iphone 15 Promax',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 4,
                'barang_kode' => 'Redmi',
                'kategori_id' => 2,
                'barang_nama' => 'Redmi Note 13',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 5,
                'barang_kode' => 'Toshiba',
                'kategori_id' => 3,
                'barang_nama' => 'Canvio Basic 1TB',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 6,
                'barang_kode' => 'LG',
                'kategori_id' => 3,
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 7,
                'barang_kode' => 'Samsung',
                'kategori_id' => 4,
                'barang_nama' => 'Galaxy S23 Ultra',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 8,
                'barang_kode' => 'Poco',
                'kategori_id' => 4,
                'barang_nama' => 'Poco X6 Pro',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 9,
                'barang_kode' => 'Honda',
                'kategori_id' => 5,
                'barang_nama' => 'Civic Turbo',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ],
            [
                'barang_id' => 10,
                'barang_kode' => 'Lambo',
                'kategori_id' => 5,
                'barang_nama' => 'Aventador',
                'harga_beli' => 20000000,
                'harga_jual' => 15000000
            ]
        ];
        DB::table('m_barang')->insert($data);
    }
}
