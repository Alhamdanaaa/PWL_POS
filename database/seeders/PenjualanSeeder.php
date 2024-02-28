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
        $penjualan = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'John Doe',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Jane Smith',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Alice Johnson',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Bob Brown',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Eve White',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Chris Lee',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'David Black',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Fiona Green',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'George Brown',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Hannah Blue',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('t_penjualan')->insert($penjualan);
    }
}
