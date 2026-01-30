<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AlumniSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        $data = [
            [
                'nama' => 'Ahmad Rizky',
                'angkatan' => 2018,
                'aktivitas' => 'Siswa SMA Negeri',
                'testimoni' => 'MTs Arrosyad Prambon membentuk kedisiplinan dan kebiasaan belajar yang masih saya rasakan hingga sekarang.'
            ],
            [
                'nama' => 'Siti Aisyah',
                'angkatan' => 2019,
                'aktivitas' => 'Santri Pondok Pesantren',
                'testimoni' => 'Pembiasaan ibadah dan bimbingan guru sangat membantu saya dalam menjalani pendidikan selanjutnya.'
            ],
            [
                'nama' => 'Muhammad Farhan',
                'angkatan' => 2017,
                'aktivitas' => 'Siswa SMK',
                'testimoni' => 'Saya mendapatkan dasar ilmu dan sikap yang membuat saya lebih siap menghadapi tantangan belajar.'
            ],
            [
                'nama' => 'Nur Halimah',
                'angkatan' => 2020,
                'aktivitas' => 'Siswa MA',
                'testimoni' => 'Lingkungan sekolah yang nyaman membuat saya berkembang baik secara akademik maupun akhlak.'
            ],
            [
                'nama' => 'Fajar Maulana',
                'angkatan' => 2016,
                'aktivitas' => 'Mahasiswa',
                'testimoni' => 'Nilai tanggung jawab dan kejujuran yang ditanamkan masih menjadi pegangan saya hingga saat ini.'
            ],
            [
                'nama' => 'Aulia Rahman',
                'angkatan' => 2021,
                'aktivitas' => 'Siswa SMA Swasta',
                'testimoni' => 'Guru-guru di MTs Arrosyad Prambon selalu memberikan arahan yang jelas dan mendukung.'
            ],
            [
                'nama' => 'Dewi Lestari',
                'angkatan' => 2015,
                'aktivitas' => 'Karyawan Swasta',
                'testimoni' => 'Dasar etika dan cara bersosialisasi yang saya pelajari sangat berguna di dunia kerja.'
            ],
            [
                'nama' => 'Rizal Pratama',
                'angkatan' => 2014,
                'aktivitas' => 'Wirausaha',
                'testimoni' => 'Saya belajar kemandirian dan tanggung jawab sejak sekolah di MTs Arrosyad Prambon.'
            ],
            [
                'nama' => 'Nabila Putri',
                'angkatan' => 2022,
                'aktivitas' => 'Siswa SMA',
                'testimoni' => 'Pembelajaran yang terarah membuat saya lebih percaya diri melanjutkan pendidikan.'
            ],
            [
                'nama' => 'Hendra Saputra',
                'angkatan' => 2013,
                'aktivitas' => 'Mahasiswa',
                'testimoni' => 'Banyak pelajaran hidup yang saya dapatkan dari guru-guru selama menempuh pendidikan di sini.'
            ],
        ];

        foreach ($data as $i => $alumni) {
            DB::table('alumnis')->insert([
                'nama' => $alumni['nama'],
                'angkatan' => $alumni['angkatan'],
                'gambar' => 'alumni/' . 'profileAlumni' . '.avif',
                'aktivitas_sekarang' => $alumni['aktivitas'],
                'bintang' => 5,
                'testimoni' => $alumni['testimoni'],
                'ditampilkan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
