<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::orderBy('id', 'desc')->get();
        return view('Dashboard.Guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('Dashboard.Guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'jabatan' => 'required|string|max:150',
            "deskripsi" => "required",
            'gambar' => 'required|image|max:10240',
        ]);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'guru',
            800,
            150
        );

        Guru::create($validated);

        return redirect()->route('guru.index')->with('success', 'Guru berhasil ditambahkan');
    }

    public function edit($id)
    {
        $guru = Guru::findOrFail($id);
        return view('Dashboard.Guru.edit', compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $guru = Guru::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'jabatan' => 'required|string|max:150',
            "deskripsi" => "required",
            'gambar' => 'nullable|image|max:10240',
        ]);

        if ($request->hasFile('gambar')) {
            if ($guru->gambar && Storage::disk('public')->exists($guru->gambar)) {
                Storage::disk('public')->delete($guru->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'guru',
                800,
                150
            );
        } else {
            $validated['gambar'] = $guru->gambar;
        }

        $guru->update($validated);

        return redirect()->route('guru.index')->with('success', 'Guru berhasil diperbarui');
    }
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id);

        if ($guru->gambar && Storage::disk('public')->exists($guru->gambar)) {
            Storage::disk('public')->delete($guru->gambar);
        }

        $guru->delete();

        return redirect()->route('guru.index')->with('success', 'Guru berhasil dihapus');
    }

    public function listGuru()
    {
        $guru = Guru::all();
        return view('Landing Page.listGuru', compact('guru'));
    }
}
