<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Menampilkan daftar checkout
     */
    public function index()
    {
        $checkouts = Checkout::orderBy('created_at', 'desc')->get();
        return view('checkout.index', compact('checkouts'));
    }

    /**
     * Menampilkan form tambah checkout
     */
    public function create()
    {
        return view('checkout.create');
    }

    /**
     * Menyimpan data checkout baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'kamar' => 'required|string|max:50',
            'tanggal_checkout' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
        ]);

        Checkout::create($request->all());
        return redirect()->route('checkout.index')->with('success', 'Checkout berhasil ditambahkan.');
    }

    /**
     * Menampilkan form edit checkout
     */
    public function edit($id)
    {
        $checkout = Checkout::findOrFail($id);
        return view('checkout.edit', compact('checkout'));
    }

    /**
     * Mengupdate checkout
     */
    public function update(Request $request, $id)
    {
        $checkout = Checkout::findOrFail($id);

        $request->validate([
            'nama_tamu' => 'required|string|max:100',
            'kamar' => 'required|string|max:50',
            'tanggal_checkout' => 'required|date',
            'keterangan' => 'nullable|string|max:255',
        ]);

        $checkout->update($request->all());
        return redirect()->route('checkout.index')->with('success', 'Checkout berhasil diperbarui.');
    }

    /**
     * Menghapus checkout
     */
    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id);
        $checkout->delete();

        return redirect()->route('checkout.index')->with('success', 'Checkout berhasil dihapus.');
    }
}
