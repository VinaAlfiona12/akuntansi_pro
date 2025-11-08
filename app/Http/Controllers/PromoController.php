<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Menampilkan daftar promo
     */
    public function index()
    {
        $promos = Promo::orderBy('nama_promo')->get();
        return view('promo.index', compact('promos'));
    }

    /**
     * Menampilkan form tambah promo
     */
    public function create()
    {
        return view('promo.create');
    }

    /**
     * Menyimpan promo baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_promo' => 'required|string|max:100',
            'diskon' => 'required|numeric|min:0',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Promo::create($request->all());
        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit promo
     */
    public function edit($id)
    {
        $promo = Promo::findOrFail($id);
        return view('promo.edit', compact('promo'));
    }

    /**
     * Mengupdate promo
     */
    public function update(Request $request, $id)
    {
        $promo = Promo::findOrFail($id);

        $request->validate([
            'nama_promo' => 'required|string|max:100',
            'diskon' => 'required|numeric|min:0',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $promo->update($request->all());
        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui.');
    }

    /**
     * Menghapus promo
     */
    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();

        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}
