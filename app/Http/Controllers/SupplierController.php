<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::orderBy('id')->get();
        return view('supplier.index', compact('supplier'));
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'handphone' => 'required'
            
        ]);

        supplier::create($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil ditambahkan');
    }

    public function show(string $id)
    {
        $supplier = supplier::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    public function edit(string $id)
    {
        $supplier = supplier::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, string $id)
    {
        $supplier = supplier::findOrFail($id);

        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'handphone' => 'required'
        ]);

        $supplier->update($request->all());
        return redirect()->route('supplier.index')->with('success', 'Akun berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $supplier = supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index')->with('success', 'Akun berhasil dihapus');
    }
}
