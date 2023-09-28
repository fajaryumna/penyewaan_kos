<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenghuniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('penghuni')->insert([
            'nama' => 'John Doe',
            'pekerjaan' => 'Karyawan',
            'alamat' => 'Jalan ABC No. 123',
            'tanggal_lahir' => '1990-05-15',
            'telepon' => '081234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
