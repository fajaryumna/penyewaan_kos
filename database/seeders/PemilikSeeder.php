<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PemilikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pemilik')->insert([
            'nama' => 'Jane Smith',
            'alamat' => 'Jalan XYZ No. 456',
            'telepon' => '087654321098',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
