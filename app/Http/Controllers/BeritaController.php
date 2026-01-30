<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    public function index()
    {
        $beritas = Berita::with('kategori')->orderBy('id', 'desc')->get();
        return view('Dashboard.Berita.index', compact('beritas'));
    }

    public function create()
    {
        $kategoris = Kategori::orderBy('nama')->get();
        return view('Dashboard.Berita.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:200|unique:beritas,judul',
            'isi' => 'required|string',
            'gambar' => 'required|image|max:10240',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        $validated['slug'] = Str::slug($validated['judul']);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'berita',
            1200,
            200
        );

        Berita::create($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::with('kategori')->where('id', $id)->firstOrFail();
        return view('Dashboard.Berita.detail', compact('berita'));
    }

    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $kategoris = Kategori::orderBy('nama')->get();
        return view('Dashboard.Berita.edit', compact('berita', 'kategoris'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:200|unique:beritas,judul,' . $berita->id,
            'isi' => 'required|string',
            'gambar' => 'nullable|image|max:10240',
            'kategori_id' => 'required|exists:kategoris,id',
        ]);

        if ($validated['judul'] !== $berita->judul) {
            $validated['slug'] = Str::slug($validated['judul']);
        }

        if ($request->hasFile('gambar')) {
            if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'berita',
                1200,
                200
            );
        } else {
            $validated['gambar'] = $berita->gambar;
        }

        $berita->update($validated);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);

        if ($berita->gambar && Storage::disk('public')->exists($berita->gambar)) {
            Storage::disk('public')->delete($berita->gambar);
        }

        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
