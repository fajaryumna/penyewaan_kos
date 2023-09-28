<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarkosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kamarkos')->insert([
            'tipe' => 'basic',
            'lantai' => '1',
            'harga' => 500000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
