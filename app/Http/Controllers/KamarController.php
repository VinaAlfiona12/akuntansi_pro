<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Menampilkan daftar kamar
     */
    public function index()
    {
        $kamar = Kamar::orderBy('nomor_kamar')->get();
        return view('kamar.index', compact('kamar'));
    }

    /**
     * Menampilkan form tambah kamar baru
     */
    public function create()
    {
        return view('kamar.create');
    }

    /**
     * Menyimpan data kamar baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_kamar' => 'required|string|max:10|unique:kamar,nomor_kamar',
            'tipe_kamar' => 'required|string|max:50',
            'harga_per_malam' => 'required|numeric|min:0',
            'status' => 'required|string|in:tersedia,terisi,perbaikan',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Kamar::create($request->all());
        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit kamar
     */
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }

    /**
     * Mengupdate data kamar
     */
    public function update(Request $request, $id)
    {
        $kamar = Kamar::findOrFail($id);

        $request->validate([
    'nomor_kamar' => 'required|string|max:10',
    'tipe_kamar' => 'required|string|max:50',
    'harga' => 'required|numeric',
    'status' => 'required|in:tersedia,terisi,perawatan',
    'keterangan' => 'nullable|string|max:255',
]);

        $kamar->update($request->all());
        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil diperbarui.');
    }

    /**
     * Menghapus data kamar
     */
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Data kamar berhasil dihapus.');
    }
}
