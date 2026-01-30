<?php

namespace App\Http\Controllers;

use App\Models\Konfigurasi;
use Illuminate\Http\Request;
use App\Services\ImageUploader;
use Illuminate\Support\Facades\Storage;

class KonfigurasiController extends Controller
{
    /**
     * Show the form for editing the konfigurasi (only one row).
     */
    public function edit($id = 1)
    {
        $konfigurasi = Konfigurasi::findOrFail($id);
        return view('Dashboard.konfigurasi', compact('konfigurasi'));
    }

    /**
     * Update the konfigurasi in storage.
     */

    public function update(Request $request, $id = 1)
    {
        $konfigurasi = Konfigurasi::findOrFail($id);

        $validated = $request->validate([
            'banner_web' => 'nullable|image|max:10240',
            'gambar_sekolah' => 'nullable|image|max:10240',
            'foto_kepala_sekolah' => 'nullable|image|max:10240',
            'gambar_ppdb' => 'nullable|image|max:10240',
            'kata_sambutan' => 'nullable|string',
            'nama_kepala_sekolah' => 'nullable|string|max:255',
            'headline_ppdb' => 'nullable|string|max:255',
            'teks_ppdb' => 'nullable|string',
            'statistik_satu_judul' => 'nullable|string|max:255',
            'statistik_satu_deskripsi' => 'nullable|string|max:255',
            'statistik_dua_judul' => 'nullable|string|max:255',
            'statistik_dua_deskripsi' => 'nullable|string|max:255',
            'statistik_tiga_judul' => 'nullable|string|max:255',
            'statistik_tiga_deskripsi' => 'nullable|string|max:255',
        ]);

        $imagePresets = [
            'banner_web' => [1920, 200],
            'gambar_sekolah' => [1200, 200],
            'foto_kepala_sekolah' => [800, 150],
            'gambar_ppdb' => [1200, 180],
        ];

        foreach ($imagePresets as $field => [$width, $targetKb]) {
            if ($request->hasFile($field)) {
                if ($konfigurasi->$field && Storage::disk('public')->exists($konfigurasi->$field)) {
                    Storage::disk('public')->delete($konfigurasi->$field);
                }

                $validated[$field] = ImageUploader::upload(
                    $request->file($field),
                    'konfigurasi',
                    $width,
                    $targetKb
                );
            } else {
                $validated[$field] = $konfigurasi->$field;
            }
        }

        $konfigurasi->update($validated);

        return redirect()
            ->route('konfigurasi.edit', $konfigurasi->id)
            ->with('success', 'Konfigurasi berhasil diperbarui.');
    }
}
