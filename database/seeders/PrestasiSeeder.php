<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PrestasiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('prestasis')->insert([
            [
                'nama_kejuaraan' => 'Lomba Banjari Tingkat Kabupaten Sidoarjo',
                'siapa_yang_meraih' => 'Tim Hadrah MTs Arrosyad',
                'deskripsi_singkat' => 'Berhasil meraih juara pertama dengan lantunan shalawat yang kompak, mengalahkan puluhan grup dari sekolah lain di Sidoarjo.',
                'gambar' => 'prestasi/1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kejuaraan' => 'Cerdas Cermat MTs Se-Jawa Timur',
                'siapa_yang_meraih' => 'Tim Cerdas Cermat MTs Arrosyad',
                'deskripsi_singkat' => 'Meraih juara dua dalam ajang cerdas cermat tingkat Jawa Timur dengan materi agama, pengetahuan umum, dan sains.',
                'gambar' => 'prestasi/2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kejuaraan' => 'Kejuaraan Atletik Pelajar Sidoarjo',
                'siapa_yang_meraih' => 'Ahmad Fauzi (siswa MTs Arrosyad)',
                'deskripsi_singkat' => 'Menyabet medali emas di nomor lari 100 meter putra tingkat kabupaten dengan catatan waktu terbaik.',
                'gambar' => 'prestasi/3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kejuaraan' => 'Kejuaraan Karate Pelajar Jawa Timur',
                'siapa_yang_meraih' => 'Siti Nurhaliza (siswi MTs Arrosyad)',
                'deskripsi_singkat' => 'Meraih juara tiga kategori kata perorangan setelah menunjukkan teknik disiplin dan fokus.',
                'gambar' => 'prestasi/4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
