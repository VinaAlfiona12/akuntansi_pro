<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Menampilkan daftar data layanan
     */
    public function index()
    {
        $layanans = Layanan::orderBy('nama_layanan')->get();
        return view('layanan.index', compact('layanans'));
    }

    /**
     * Menampilkan form tambah data layanan
     */
    public function create()
    {
        return view('layanan.create');
    }

    /**
     * Menyimpan data layanan baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Layanan::create($request->all());
        return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data layanan
     */
    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);
        return view('layanan.edit', compact('layanan'));
    }

    /**
     * Mengupdate data layanan
     */
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $request->validate([
            'nama_layanan' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $layanan->update($request->all());
        return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil diperbarui.');
    }

    /**
     * Menghapus data layanan
     */
    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->delete();

        return redirect()->route('layanan.index')->with('success', 'Data layanan berhasil dihapus.');
    }
}
