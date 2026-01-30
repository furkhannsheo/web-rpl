<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Siswa Membuat Tanaman Hidroponik',
                'isi' => "Siswa SMK Krian 1 menunjukkan kreativitas dan kepedulian lingkungan melalui kegiatan pembuatan tanaman hidroponik di lingkungan sekolah. Kegiatan ini merupakan bagian dari pembelajaran berbasis proyek yang bertujuan melatih siswa agar mampu berpikir kritis, mandiri, dan inovatif.\n\nDalam pelaksanaannya, siswa memanfaatkan bahan-bahan sederhana seperti botol bekas, pipa paralon, serta sistem aliran air nutrisi yang dirancang secara mandiri. Mereka mempelajari cara menanam, merawat, serta menjaga keseimbangan nutrisi tanaman agar dapat tumbuh dengan optimal.\n\nMelalui kegiatan hidroponik ini, siswa tidak hanya belajar tentang pertanian modern, tetapi juga memahami pentingnya ketahanan pangan dan pemanfaatan lahan sempit. Program ini diharapkan mampu menumbuhkan jiwa wirausaha serta kesadaran lingkungan sejak dini.",
                'gambar' => 'berita/1.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Peringatan Maulid Nabi di Sekolah',
                'isi' => "Dalam rangka memperingati Maulid Nabi Muhammad SAW, SMK Krian 1 menggelar kegiatan keagamaan yang berlangsung dengan penuh khidmat dan kekeluargaan. Seluruh siswa dan guru mengikuti rangkaian acara yang bertujuan menumbuhkan kecintaan kepada Rasulullah SAW.\n\nAcara diawali dengan pembacaan shalawat bersama yang dipimpin oleh tim hadrah sekolah. Suasana religius terasa semakin kuat saat lantunan shalawat menggema di aula sekolah.\n\nKegiatan dilanjutkan dengan tausiyah yang menekankan pentingnya meneladani akhlak Rasulullah dalam kehidupan sehari-hari, khususnya dalam bersikap jujur, disiplin, dan saling menghormati. Peringatan ini menjadi sarana pembinaan karakter spiritual bagi seluruh warga sekolah.",
                'gambar' => 'berita/2.jpeg',
                'kategori_id' => 1,
            ],
            [
                'judul' => 'Latihan Rutin Ekstrakurikuler Banjari',
                'isi' => "Ekstrakurikuler Banjari di SMK Krian 1 secara rutin melaksanakan latihan sebagai wadah pengembangan bakat seni religi siswa. Kegiatan ini diikuti oleh siswa dari berbagai tingkat kelas yang memiliki minat pada seni musik islami.\n\nLatihan meliputi teknik tabuhan rebana, pengaturan vokal, serta kekompakan tim. Selain melatih keterampilan bermusik, kegiatan banjari juga menanamkan nilai kebersamaan, disiplin, dan rasa tanggung jawab.\n\nEkstrakurikuler ini sering tampil dalam berbagai acara sekolah dan keagamaan, sehingga menjadi salah satu kebanggaan sekolah dalam bidang seni religi.",
                'gambar' => 'berita/3.jpeg',
                'kategori_id' => 1,
            ],
            [
                'judul' => 'Kegiatan Pramuka Melatih Kedisiplinan',
                'isi' => "Kegiatan Pramuka di SMK Krian 1 dilaksanakan secara rutin sebagai bagian dari pembentukan karakter siswa. Melalui kegiatan ini, siswa dilatih untuk memiliki sikap disiplin, tangguh, serta mampu bekerja sama dalam tim.\n\nMateri yang diberikan meliputi baris-berbaris, tali-temali, dan latihan kepemimpinan. Seluruh kegiatan dilakukan dengan pendekatan praktik langsung sehingga siswa dapat memahami nilai-nilai kepramukaan secara nyata.\n\nPramuka menjadi salah satu sarana penting dalam membentuk generasi muda yang mandiri, bertanggung jawab, dan berjiwa sosial.",
                'gambar' => 'berita/4.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Penanaman 100 Pohon di Lingkungan Sekolah',
                'isi' => "SMK Krian 1 melaksanakan program penanaman 100 pohon sebagai bentuk kepedulian terhadap kelestarian lingkungan. Kegiatan ini melibatkan seluruh siswa dan guru dengan tujuan menciptakan lingkungan sekolah yang hijau dan asri.\n\nBerbagai jenis pohon ditanam di area sekolah untuk meningkatkan kualitas udara dan kenyamanan belajar. Setiap kelas diberi tanggung jawab untuk merawat pohon yang telah ditanam.\n\nMelalui program ini, sekolah berharap dapat menanamkan kesadaran cinta lingkungan dan tanggung jawab ekologis kepada seluruh siswa.",
                'gambar' => 'berita/5.jpeg',
                'kategori_id' => 3,
            ],
            [
                'judul' => 'Upacara Bendera Hari Senin',
                'isi' => "Upacara bendera hari Senin dilaksanakan secara rutin di SMK Krian 1 sebagai sarana penanaman nilai nasionalisme dan kedisiplinan. Seluruh siswa mengikuti upacara dengan tertib dan penuh tanggung jawab.\n\nMelalui kegiatan ini, siswa dilatih untuk menghargai jasa para pahlawan serta memahami pentingnya persatuan dan kesatuan bangsa.",
                'gambar' => 'berita/1.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Kerja Bakti Membersihkan Sekolah',
                'isi' => "Siswa dan guru SMK Krian 1 melaksanakan kerja bakti bersama untuk menjaga kebersihan lingkungan sekolah. Kegiatan ini dilakukan sebagai upaya menciptakan suasana belajar yang nyaman dan sehat.\n\nKerja bakti juga menjadi sarana menumbuhkan rasa kebersamaan, kepedulian, dan tanggung jawab terhadap lingkungan sekitar.",
                'gambar' => 'berita/2.jpeg',
                'kategori_id' => 3,
            ],
            [
                'judul' => 'Lomba Kebersihan Antar Kelas',
                'isi' => "Lomba kebersihan antar kelas diadakan untuk meningkatkan kesadaran siswa akan pentingnya menjaga kebersihan lingkungan sekolah. Setiap kelas berlomba menciptakan ruang belajar yang rapi dan nyaman.\n\nKegiatan ini diharapkan mampu membentuk kebiasaan hidup bersih dan sehat di kalangan siswa.",
                'gambar' => 'berita/3.jpeg',
                'kategori_id' => 3,
            ],
            [
                'judul' => 'Pelatihan Baris Berbaris Pramuka',
                'isi' => "Pelatihan baris-berbaris dilaksanakan untuk melatih kekompakan dan kedisiplinan anggota Pramuka SMK Krian 1. Siswa mengikuti latihan dengan penuh semangat meskipun dilakukan di bawah terik matahari.\n\nLatihan ini menjadi bagian penting dalam membentuk mental dan fisik siswa agar lebih tangguh.",
                'gambar' => 'berita/4.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Peringatan Hari Santri Nasional',
                'isi' => "Peringatan Hari Santri Nasional di SMK Krian 1 dilaksanakan dengan kegiatan doa bersama dan ceramah keagamaan. Kegiatan ini bertujuan mengenang peran santri dalam perjuangan bangsa.\n\nMelalui peringatan ini, siswa diharapkan semakin bangga dengan identitas santri dan nilai-nilai keislaman.",
                'gambar' => 'berita/5.jpeg',
                'kategori_id' => 1,
            ],
            [
                'judul' => 'Kegiatan Literasi Pagi Sebelum Belajar',
                'isi' => "Program literasi pagi dilaksanakan sebelum kegiatan belajar mengajar dimulai. Siswa dibiasakan membaca buku untuk meningkatkan kemampuan literasi dan wawasan pengetahuan.\n\nKegiatan ini menjadi salah satu upaya sekolah dalam menumbuhkan budaya membaca sejak dini.",
                'gambar' => 'berita/1.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Simulasi Kesiapsiagaan Bencana',
                'isi' => "Simulasi kesiapsiagaan bencana dilaksanakan untuk meningkatkan kesiapan siswa dalam menghadapi situasi darurat. Siswa dibekali pengetahuan dan praktik evakuasi yang benar.\n\nKegiatan ini bertujuan membangun kesadaran akan pentingnya keselamatan diri dan lingkungan.",
                'gambar' => 'berita/2.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Pengajian Rutin Hari Jumat',
                'isi' => "Pengajian rutin hari Jumat menjadi agenda pembinaan keagamaan di SMK Krian 1. Kegiatan ini diikuti oleh seluruh siswa dan guru dengan penuh antusias.\n\nMelalui pengajian, sekolah berupaya membentuk karakter religius dan akhlak mulia pada siswa.",
                'gambar' => 'berita/3.jpeg',
                'kategori_id' => 1,
            ],
            [
                'judul' => 'Class Meeting Akhir Semester',
                'isi' => "Class meeting akhir semester diadakan sebagai sarana hiburan sekaligus penguatan kebersamaan antar siswa. Berbagai lomba dan kegiatan menarik digelar untuk mengisi waktu setelah ujian.\n\nKegiatan ini bertujuan menciptakan suasana sekolah yang menyenangkan dan harmonis.",
                'gambar' => 'berita/4.jpeg',
                'kategori_id' => 2,
            ],
            [
                'judul' => 'Pembagian Raport Semester Ganjil',
                'isi' => "Pembagian raport semester ganjil dilaksanakan dengan tertib dan terjadwal. Orang tua siswa diundang untuk menerima hasil evaluasi belajar secara langsung.\n\nKegiatan ini menjadi momen penting dalam evaluasi perkembangan akademik dan karakter siswa.",
                'gambar' => 'berita/5.jpeg',
                'kategori_id' => 2,
            ],
        ];

        $insert = [];

        foreach ($data as $item) {
            $insert[] = [
                'judul' => $item['judul'],
                'slug' => Str::slug($item['judul']),
                'isi' => $item['isi'],
                'gambar' => $item['gambar'],
                'kategori_id' => $item['kategori_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('beritas')->insert($insert);
    }
}
