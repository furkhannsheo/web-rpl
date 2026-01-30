<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::orderBy('id', 'desc')->get();
        return view('Dashboard.Prestasi.index', compact('prestasis'));
    }

    public function create()
    {
        return view('Dashboard.Prestasi.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kejuaraan' => 'required|string|max:50',
            'siapa_yang_meraih' => 'required|string',
            'deskripsi_singkat' => 'required|string|max:30',
            'gambar' => 'required|image|max:10240',
        ]);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'prestasi',
            1000,
            180
        );

        Prestasi::create($validated);

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil ditambahkan');
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('Dashboard.Prestasi.detail', compact('prestasi'));
    }

    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('Dashboard.Prestasi.edit', compact('prestasi'));
    }

    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::findOrFail($id);

        $validated = $request->validate([
            'nama_kejuaraan' => 'required|string|max:50',
            'siapa_yang_meraih' => 'required|string',
            'deskripsi_singkat' => 'required|string|max:30',
            'gambar' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
                Storage::disk('public')->delete($prestasi->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'prestasi',
                1000,
                180
            );
        } else {
            $validated['gambar'] = $prestasi->gambar;
        }

        $prestasi->update($validated);

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil diperbarui');
    }
    public function destroy($id)
    {
        $prestasi = Prestasi::findOrFail($id);

        if ($prestasi->gambar && Storage::disk('public')->exists($prestasi->gambar)) {
            Storage::disk('public')->delete($prestasi->gambar);
        }

        $prestasi->delete();

        return redirect()->route('prestasi.index')->with('success', 'Prestasi berhasil dihapus');
    }

    public function listPrestasi()
    {
        $prestasi = Prestasi::all();
        return view('Landing Page.listPrestasi', compact('prestasi'));
    }
}
