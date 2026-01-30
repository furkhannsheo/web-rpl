<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::orderBy('id', 'desc')->get();
        return view('Dashboard.Fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('Dashboard.Fasilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|max:10240',
        ]);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'fasilitas',
            1200,
            200
        );

        Fasilitas::create($validated);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('Dashboard.Fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            if ($fasilitas->gambar && Storage::disk('public')->exists($fasilitas->gambar)) {
                Storage::disk('public')->delete($fasilitas->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'fasilitas',
                1200,
                200
            );
        } else {
            $validated['gambar'] = $fasilitas->gambar;
        }

        $fasilitas->update($validated);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        if ($fasilitas->gambar && Storage::disk('public')->exists($fasilitas->gambar)) {
            Storage::disk('public')->delete($fasilitas->gambar);
        }

        $fasilitas->delete();

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil dihapus');
    }
    public function listFasilitas()
    {
        $fasilitas = Fasilitas::all();
        return view('Landing Page.listFasilitas', compact('fasilitas'));
    }
}
