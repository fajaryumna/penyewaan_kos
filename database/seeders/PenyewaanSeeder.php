<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenyewaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penyewaan')->insert([
            'tanggal_penyewaan' => '2023-09-28',
            'biaya_charge' => 20000,
            'denda' => 50000,
            'harga' => 750000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
