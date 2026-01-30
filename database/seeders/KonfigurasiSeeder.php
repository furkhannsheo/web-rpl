<?php

namespace Database\Seeders;

use App\Models\Konfigurasi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KonfigurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Konfigurasi::factory()->create();
    }
}
