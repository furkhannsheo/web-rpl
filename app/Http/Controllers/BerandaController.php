<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Guru;
use App\Models\Berita;
use App\Models\Konfigurasi;
use App\Models\Prestasi;

class BerandaController extends Controller
{
    public function index()
    {
        $alumniAktif = Alumni::where('ditampilkan', true)->count();
        $jumlahGuru = Guru::count();
        $jumlahBerita = Berita::count();
        $jumlahPrestasi = Prestasi::count();

        return view('Dashboard.beranda', compact('alumniAktif', 'jumlahGuru', 'jumlahBerita', 'jumlahPrestasi'));
    }
}
