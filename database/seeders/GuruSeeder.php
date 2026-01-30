<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('gurus')->insert([
            [
                'nama' => 'Dumami',
                'jabatan' => 'Staff TU',
                'deskripsi' => 'Sebagai Staff Tata Usaha, Dumami berperan penting dalam pengelolaan administrasi sekolah secara menyeluruh. Bertanggung jawab atas pencatatan dokumen, pengarsipan data, serta pelayanan administrasi kepada guru, siswa, dan pihak eksternal. Dengan ketelitian dan kedisiplinan kerja yang tinggi, beliau memastikan setiap proses administrasi berjalan tertib, rapi, dan sesuai dengan prosedur yang berlaku di lingkungan sekolah.',
                'gambar' => 'guru/2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Isnaini Imroatun Nabilia, S.Pd',
                'jabatan' => 'Bendahara Sekolah',
                'deskripsi' => 'Sebagai Bendahara Sekolah, Isnaini Imroatun Nabilia, S.Pd bertanggung jawab dalam pengelolaan keuangan sekolah secara transparan dan akuntabel. Mengelola pemasukan dan pengeluaran dana, menyusun laporan keuangan, serta memastikan penggunaan anggaran sesuai dengan ketentuan yang berlaku. Perannya sangat krusial dalam menjaga stabilitas dan kelancaran operasional sekolah dari sisi finansial.',
                'gambar' => 'guru/3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'M. Bisri Samsuri, S.Pd',
                'jabatan' => 'Operator Madrasah',
                'deskripsi' => 'M. Bisri Samsuri, S.Pd menjalankan tugas sebagai Operator Madrasah yang menangani pengelolaan data akademik dan administratif berbasis sistem. Bertanggung jawab terhadap input, pembaruan, dan validasi data pada sistem informasi madrasah, termasuk data siswa, guru, dan kegiatan akademik. Peran ini menuntut ketelitian tinggi serta pemahaman teknologi informasi agar data sekolah selalu akurat dan terintegrasi.',
                'gambar' => 'guru/5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Moh. Thobib Alifani, S.Pd',
                'jabatan' => 'Wali Kelas 7',
                'deskripsi' => 'Sebagai Wali Kelas 7, Moh. Thobib Alifani, S.Pd bertanggung jawab dalam membimbing dan mendampingi siswa selama proses pembelajaran dan perkembangan karakter. Berperan sebagai penghubung antara siswa, guru mata pelajaran, dan orang tua, beliau memastikan kondisi akademik dan kedisiplinan siswa tetap terpantau. Pendekatan pembinaan dilakukan secara terarah untuk membentuk sikap tanggung jawab dan kemandirian peserta didik.',
                'gambar' => 'guru/4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Purniawan, S.Pd',
                'jabatan' => 'Waka Kurikulum',
                'deskripsi' => 'Sebagai Wakil Kepala Sekolah Bidang Kurikulum, Purniawan, S.Pd memiliki tanggung jawab dalam perencanaan, pengembangan, dan evaluasi kurikulum pembelajaran. Mengkoordinasikan penyusunan perangkat ajar, jadwal pelajaran, serta pelaksanaan kegiatan akademik agar berjalan sesuai standar pendidikan. Peran ini menuntut kemampuan manajerial dan pemahaman mendalam terhadap sistem pembelajaran.',
                'gambar' => 'guru/6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Khotimah, S.Pd',
                'jabatan' => 'Guru',
                'deskripsi' => 'Siti Khotimah, S.Pd merupakan tenaga pendidik yang berperan dalam proses pembelajaran dan pengembangan potensi peserta didik. Melaksanakan kegiatan mengajar dengan pendekatan yang edukatif dan komunikatif, serta berkontribusi dalam menciptakan lingkungan belajar yang kondusif. Fokus utama adalah membangun pemahaman konsep, sikap, dan keterampilan siswa secara seimbang.',
                'gambar' => 'guru/7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Sulistiyorini',
                'jabatan' => 'Staff TU Administrasi',
                'deskripsi' => 'Sebagai Staff Tata Usaha Administrasi, Sulistiyorini menangani berbagai kebutuhan administrasi sekolah yang berkaitan dengan pelayanan internal dan eksternal. Bertanggung jawab atas pengelolaan surat-menyurat, pengarsipan dokumen, serta mendukung kelancaran aktivitas administratif harian. Ketepatan dan kerapian kerja menjadi aspek utama dalam menjalankan tugas ini.',
                'gambar' => 'guru/8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Yusniah Rachmah Syafitri, S.Pd',
                'jabatan' => 'Wali Kelas 8',
                'deskripsi' => 'Sebagai Wali Kelas 8, Yusniah Rachmah Syafitri, S.Pd berperan dalam membina, memantau, dan mengarahkan perkembangan akademik serta sikap siswa. Menjalin komunikasi aktif dengan orang tua dan guru mata pelajaran untuk memastikan proses belajar berjalan optimal. Fokus pembinaan diarahkan pada peningkatan kedisiplinan, tanggung jawab, dan kesiapan siswa dalam menghadapi jenjang berikutnya.',
                'gambar' => 'guru/9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
