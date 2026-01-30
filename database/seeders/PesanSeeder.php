<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PesanSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('pesans')->insert([
                'nama_lengkap' => $faker->name(),
                'email' => $faker->unique()->safeEmail(),
                'subjek' => $faker->sentence(4),
                'pesan' => $faker->paragraph(3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
