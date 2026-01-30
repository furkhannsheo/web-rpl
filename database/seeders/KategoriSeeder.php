<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kategoris')->insert([
            [
                'nama' => 'Kegiatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Pembelajaran',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Peresmian',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
