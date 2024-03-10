<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                'pembeli' => 'Arya Bagus',
                'penjualan_kode' => 'KODE1',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Yusriyah Firjatullah',
                'penjualan_kode' => 'KODE2',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Dido Imam',
                'penjualan_kode' => 'KODE3',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Atha',
                'penjualan_kode' => 'KODE4',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Naufal',
                'penjualan_kode' => 'KODE5',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Iqbal',
                'penjualan_kode' => 'KODE6',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Makmur',
                'penjualan_kode' => 'KODE7',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Royhan',
                'penjualan_kode' => 'KODE8',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Chevalerie',
                'penjualan_kode' => 'KODE9',
                'penjualan_tanggal' => '2005-01-17'
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Akhyar',
                'penjualan_kode' => 'KODE10',
                'penjualan_tanggal' => '2005-01-17'
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
