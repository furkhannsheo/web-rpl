<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    public function index()
    {
        $alumnis = Alumni::orderBy('id', 'desc')->get();
        return view('Dashboard.Alumni.index', compact('alumnis'));
    }

    public function create()
    {
        return view('Dashboard.Alumni.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'angkatan' => 'required|digits:4|integer',
            'gambar' => 'required|image|max:10240',
            'aktivitas_sekarang' => 'required|string|max:255',
            'bintang' => 'required|integer|min:0|max:5',
            'testimoni' => 'required|string|max:255',
            'ditampilkan' => 'boolean',
        ]);

        $validated['gambar'] = ImageUploader::upload(
            $request->file('gambar'),
            'alumni',
            1200,
            200
        );

        Alumni::create($validated);

        if (Auth::check()) {
            return redirect()
                ->route('alumni.index')
                ->with('success', 'Alumni berhasil ditambahkan');
        }

        return redirect()
            ->route('view.beranda')
            ->with('success', 'Terima kasih, data alumni berhasil dikirim. Mohon Tunggu Validasi Data');
    }

    public function edit($id)
    {
        $alumni = Alumni::findOrFail($id);
        return view('Dashboard.Alumni.edit', compact('alumni'));
    }

    public function update(Request $request, $id)
    {
        $alumni = Alumni::findOrFail($id);

        $validated = $request->validate([
            'nama' => 'required|string|max:150',
            'angkatan' => 'required|digits:4|integer',
            'gambar' => 'nullable|image|max:10240',
            'aktivitas_sekarang' => 'required|string|max:255',
            'bintang' => 'required|integer|min:0|max:5',
            'testimoni' => 'required|string|max:255',
            'ditampilkan' => 'boolean',
        ]);

        if ($request->hasFile('gambar')) {
            if ($alumni->gambar && Storage::disk('public')->exists($alumni->gambar)) {
                Storage::disk('public')->delete($alumni->gambar);
            }

            $validated['gambar'] = ImageUploader::upload(
                $request->file('gambar'),
                'alumni',
                1200,
                200
            );
        } else {
            $validated['gambar'] = $alumni->gambar;
        }

        $alumni->update($validated);

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil diperbarui');
    }

    public function destroy($id)
    {
        $alumni = Alumni::findOrFail($id);

        if ($alumni->gambar && Storage::disk('public')->exists($alumni->gambar)) {
            Storage::disk('public')->delete($alumni->gambar);
        }

        $alumni->delete();

        return redirect()->route('alumni.index')->with('success', 'Alumni berhasil dihapus');
    }
    public function toggleDitampilkan($id)
    {
        $alumni = Alumni::findOrFail($id);
        $alumni->ditampilkan = !$alumni->ditampilkan;
        $alumni->save();
        return redirect()->route('alumni.index')->with('success', 'Status alumni berhasil diperbarui');
    }

    public function daftarAlumni()
    {
        return view('Landing Page.formTambahAlumni');
    }
}
