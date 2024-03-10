<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'kategori_kode' => 'Lenovo',
                'kategori_nama' => 'laptop'
            ],
            [
                'kategori_id' => 2,
                'kategori_kode' => 'Redmi',
                'kategori_nama' => 'Redmi Note 13 Pro'
            ],
            [
                'kategori_id' => 3,
                'kategori_kode' => 'Toshiba',
                'kategori_nama' => 'Televisi'
            ],
            [
                'kategori_id' => 4,
                'kategori_kode' => 'Samsung',
                'kategori_nama' => 'Air Purifier'
            ],
            [
                'kategori_id' => 5,
                'kategori_kode' => 'Ferrari',
                'kategori_nama' => 'Mobil'
            ]
        ];
        DB::table('m_kategori')->insert($data);
    }
}
