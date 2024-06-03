<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'code' => 'MK',
                'namaproduk' => 'Meo Kitten',
                'harga' => 40000,
                'jumlah' => 2,
                'stok_id' => 1,
                'deskripsi' => 'Khusus umur 2-4 Bulan'
                
            ],
            [
                'code' => 'RC',
                'namaproduk' => 'Royal Canin Recovery',
                'harga' => 80000,
                'jumlah' => 2 ,
                'stok_id' => 2,
                'deskripsi' => 'Khusus kucing pasca operasi'
            ],
        ]);

    }
}
