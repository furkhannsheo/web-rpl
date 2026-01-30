<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::orderBy('id', 'desc')->get();
        return view('Dashboard.Galeri.index', compact('galeris'));
    }

    public function create()
    {
        return view('Dashboard.Galeri.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:150',
            "deskripsi" => "required|max:100",
            'gambar' => 'required|image|max:10240',
        ]);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'galeri',
            1600,
            200
        );

        Galeri::create($validated);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('Dashboard.Galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:150',
            "required" => "required|max:100",
            'gambar' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
                Storage::disk('public')->delete($galeri->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'galeri',
                1600,
                200
            );
        } else {
            $validated['gambar'] = $galeri->gambar;
        }

        $galeri->update($validated);

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if ($galeri->gambar && Storage::disk('public')->exists($galeri->gambar)) {
            Storage::disk('public')->delete($galeri->gambar);
        }

        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Galeri berhasil dihapus');
    }

    public function listGaleri()
    {
        $kegiatan = Galeri::all();
        return view('Landing Page.listGaleri', compact('kegiatan'));
    }
}
