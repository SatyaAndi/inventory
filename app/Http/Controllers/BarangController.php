<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller

{

    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barang',
            'nama_barang' => 'required',
            'unit' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jenis' => 'required',
            'harga_satuan' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Barang::create($validatedData);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan');
    }

    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    public function edit($kode_barang)
    {
        $barang = Barang::where('kode_barang', $kode_barang)->firstOrFail();
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $kode_barang)
    {
        $validatedData = $request->validate([
            'kode_barang' => 'required|unique:barang,kode_barang,' . $kode_barang . ',kode_barang',
            'nama_barang' => 'required',
            'unit' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
            'jenis' => 'required',
            'harga_satuan' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        $barang = Barang::where('kode_barang', $kode_barang)->firstOrFail();

        // Update hanya field yang diperlukan
        $barang->update([
            'kode_barang' => $validatedData['kode_barang'],
            'nama_barang' => $validatedData['nama_barang'],
            'unit' => $validatedData['unit'],
            'ukuran' => $validatedData['ukuran'],
            'warna' => $validatedData['warna'],
            'jenis' => $validatedData['jenis'],
            'harga_satuan' => $validatedData['harga_satuan'],
            'stok' => $validatedData['stok'],
        ]);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate');
    }


    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus');
    }
}
