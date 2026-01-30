<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Alumni;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Prestasi;
use App\Models\Fasilitas;
use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use App\Models\Kategori;


class LandingPageController extends Controller
{
    public function viewBeranda()
    {
        $fasilitas = Fasilitas::all();
        $prestasi =  Prestasi::latest()->get();
        $guru = Guru::all();
        $alumni = Alumni::where('ditampilkan', true)->latest()->get();
        $berita    = Berita::with('kategori')->latest()->take(6)->get();
        $galeri    = Galeri::latest()->get();
        $konfigurasi = Konfigurasi::where("id", 1)->first();



        return view('Landing Page.index', compact(
            'fasilitas',
            'prestasi',
            'guru',
            'alumni',
            'berita',
            'galeri',
            'konfigurasi'
        ));
    }
    public function detailBerita($slug)
    {
        $berita = Berita::with('kategori')->where('slug', $slug)->firstOrFail();

        $related = Berita::with('kategori')
            ->where('kategori_id', $berita->kategori_id)
            ->where('id', '!=', $berita->id)
            ->latest()
            ->take(3)
            ->get();

        return view('Landing Page.detailBerita', compact('berita', 'related'));
    }


    public function listBerita()
    {
        $berita = Berita::with('kategori')
            ->orderBy('id', 'desc')
            ->take(9)
            ->get();

        return view('Landing Page.listBerita', compact('berita'));
    }

    public function listSemuaBerita(Request $request)
    {
        $query = Berita::with('kategori')->orderBy('id', 'desc');

        // SEARCH
        if ($request->search) {
            $query->where('judul', 'LIKE', '%' . $request->search . '%');
        }

        // FILTER KATEGORI 1 SAJA
        if ($request->kategori) {
            $query->where('kategori_id', $request->kategori);
        }

        $berita = $query->paginate(12)->withQueryString();
        $kategoris = Kategori::orderBy('id', 'desc')->get();

        return view('Landing Page.daftarBerita', compact('berita', 'kategoris'));
    }
}
