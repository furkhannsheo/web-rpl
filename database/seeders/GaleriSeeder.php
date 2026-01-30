<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GaleriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('galeris')->insert([
            [
                'judul' => 'Kegiatan Belajar di Kelas',
                'deskripsi' => 'Suasana kegiatan belajar mengajar di kelas yang berlangsung secara aktif dan kondusif bersama guru.',
                'gambar' => 'galeri/1.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Upacara Bendera Hari Senin',
                'deskripsi' => 'Pelaksanaan upacara bendera rutin sebagai sarana pembinaan disiplin dan nasionalisme siswa.',
                'gambar' => 'galeri/2.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Lomba Pramuka Tingkat Kabupaten',
                'deskripsi' => 'Kegiatan lomba Pramuka yang melatih kerja sama, kemandirian, dan jiwa kepemimpinan siswa.',
                'gambar' => 'galeri/3.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Ekstrakurikuler Hadrah Banjari',
                'deskripsi' => 'Kegiatan ekstrakurikuler seni hadrah banjari sebagai wadah pengembangan bakat dan nilai religius.',
                'gambar' => 'galeri/4.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Latihan Olahraga di Lapangan',
                'deskripsi' => 'Aktivitas olahraga bersama untuk menjaga kebugaran dan menumbuhkan sportivitas siswa.',
                'gambar' => 'galeri/5.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Workshop Teknologi Informasi',
                'deskripsi' => 'Workshop pengenalan teknologi informasi untuk menambah wawasan dan keterampilan digital siswa.',
                'gambar' => 'galeri/6.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Penampilan Seni Tari Tradisional',
                'deskripsi' => 'Penampilan seni tari tradisional sebagai bentuk pelestarian budaya dan kreativitas siswa.',
                'gambar' => 'galeri/7.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Peresmian Taman Sekolah',
                'deskripsi' => 'Kegiatan peresmian taman sekolah untuk menciptakan lingkungan belajar yang asri dan nyaman.',
                'gambar' => 'galeri/8.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
