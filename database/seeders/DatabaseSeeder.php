<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return voids
     */
    public function run()
    {
        $this->call([
            PenghuniSeeder::class,
            PemilikSeeder::class,
            KamarkosSeeder::class,
            PenyewaanSeeder::class,

        ]);
    }
}
