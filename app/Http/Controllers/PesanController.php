<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesans = Pesan::latest()->get();
        return view('Dashboard.Pesan.index', compact('pesans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'subjek' => 'required|string|max:150',
            'pesan' => 'required|string',
        ]);

        Pesan::create($request->all());

        return redirect()->back()->with('success', 'Pesan berhasil dikirim!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pesan = Pesan::findOrFail($id);
        return view('Dashboard.Pesan.detail', compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
