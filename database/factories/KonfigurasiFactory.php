<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Konfigurasi>
 */
class KonfigurasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'banner_web' => 'konfigurasi/1.webp',
            'gambar_sekolah' => 'konfigurasi/2.jpeg',
            'kata_sambutan' => "Pendidikan yang baik lahir dari niat yang tulus dan kerja sama semua pihak. MTs Arrosyad Prambon berkomitmen membentuk peserta didik yang berilmu, berakhlak, dan berkarakter. Dengan bimbingan guru serta dukungan orang tua, kami terus berupaya menciptakan lingkungan belajar yang aman, nyaman, dan bermakna. Semoga ikhtiar ini menjadi bekal bagi siswa dalam menatap masa depan.",
            'nama_kepala_sekolah' => 'Drs. H. Bashori, M.Pd.I',
            'foto_kepala_sekolah' => 'konfigurasi/3.jpg',
            'headline_ppdb' => 'Sistem Penerimaan Murid Baru (SPMB)',
            'teks_ppdb' => 'Bergabunglah dengan keluarga besar MTS Arrosyad. Pendaftaran untuk tahun ajaran 2025-2026 telah dibuka. Jelajahi program kami dan mulailah perjalanan Anda.',
            'gambar_ppdb' => null,
            'statistik_satu_judul' => '10+ Tahun',
            'statistik_satu_deskripsi' => 'Keunggulan Pendidikan',
            'statistik_dua_judul' => '50+ Siswa',
            'statistik_dua_deskripsi' => 'Terdaftar Setiap Tahun',
            'statistik_tiga_judul' => '4.9 Rating',
            'statistik_tiga_deskripsi' => 'Dari Orang Tua & Siswa',
        ];
    }
}
