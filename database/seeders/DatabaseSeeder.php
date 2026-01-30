<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'mtsarrosyad@gmail.com',
        ]);

        $this->call([
            KategoriSeeder::class,
            BeritaSeeder::class,
            FasilitasSeeder::class,
            PrestasiSeeder::class,
            GaleriSeeder::class,
            GuruSeeder::class,
            AlumniSeeder::class,
            PesanSeeder::class,
            KonfigurasiSeeder::class,
        ]);
    }
}
