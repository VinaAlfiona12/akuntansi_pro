<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    /**
     * Menampilkan daftar data servis
     */
    public function index()
    {
        $servis = Servis::orderBy('nama_servis')->get();
        return view('servis.index', compact('servis'));
    }

    /**
     * Menampilkan form tambah data servis
     */
    public function create()
    {
        return view('servis.create');
    }

    /**
     * Menyimpan data servis baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_servis' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Servis::create($request->all());
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit data servis
     */
    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        return view('servis.edit', compact('servis'));
    }

    /**
     * Mengupdate data servis
     */
    public function update(Request $request, $id)
    {
        $servis = Servis::findOrFail($id);

        $request->validate([
            'nama_servis' => 'required|string|max:100',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $servis->update($request->all());
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil diperbarui.');
    }

    /**
     * Menghapus data servis
     */
    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();

        return redirect()->route('servis.index')->with('success', 'Data servis berhasil dihapus.');
    }
}
