<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FasilitasSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('fasilitas')->insert([
            [
                'nama' => 'Lab Komputer',
                'deskripsi' => "Lab komputer dilengkapi dengan perangkat modern yang menunjang kegiatan pembelajaran berbasis teknologi. Siswa dapat mengakses software pemrograman, desain grafis, hingga simulasi jaringan. Dengan fasilitas internet yang stabil, lab ini juga mendukung kegiatan riset, ujian berbasis komputer, serta pengembangan keterampilan digital.",
                'gambar' => 'fasilitas/1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Lapangan',
                'deskripsi' => "Lapangan sekolah menjadi pusat berbagai kegiatan olahraga dan upacara. Area yang luas ini digunakan untuk sepak bola, voli, basket, maupun kegiatan pramuka. Selain itu, lapangan juga menjadi tempat berkumpul siswa dalam acara besar sekolah yang melibatkan seluruh warga sekolah.",
                'gambar' => 'fasilitas/2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Parkiran',
                'deskripsi' => "Parkiran sekolah menyediakan area yang luas dan aman untuk kendaraan siswa, guru, serta tamu sekolah. Dengan sistem pengaturan yang rapi, parkiran dapat menampung kendaraan roda dua maupun roda empat. Penempatan lahan yang strategis memudahkan akses tanpa mengganggu aktivitas pembelajaran.",
                'gambar' => 'fasilitas/3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Ruang Kelas',
                'deskripsi' => "Ruang kelas didesain nyaman dan kondusif untuk kegiatan belajar mengajar. Setiap kelas dilengkapi dengan meja kursi ergonomis, papan tulis, serta proyektor untuk mendukung metode pembelajaran interaktif. Pencahayaan alami dan sirkulasi udara yang baik menciptakan suasana belajar yang menyenangkan.",
                'gambar' => 'fasilitas/4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
