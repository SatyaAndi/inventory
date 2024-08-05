<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\PengeluaranBarang;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengeluarans = PengeluaranBarang::with('barang')->get();
        return view('pengeluaran.index', compact('pengeluarans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('pengeluaran.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_keluar' => 'required|date',
            'tujuan' => 'required|string',
            'kuantity' => 'required|integer',
            'kode_barang' => 'required|exists:barang,kode_barang',
        ]);

        PengeluaranBarang::create($validatedData);

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_pengeluaran)
    {
        $pengeluaran = PengeluaranBarang::findOrFail($id_pengeluaran);
        return view('pengeluaran.show', compact('pengeluaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_pengeluaran)
    {
        $pengeluaran = PengeluaranBarang::findOrFail($id_pengeluaran);
        $barangs = Barang::all();
        return view('pengeluaran.edit', compact('pengeluaran', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_pengeluaran)
    {
        $validatedData = $request->validate([
            'tanggal_keluar' => 'required|date',
            'tujuan' => 'required|string',
            'kuantity' => 'required|integer',
            'kode_barang' => 'required|exists:barang,kode_barang',
        ]);

        $pengeluaran = PengeluaranBarang::findOrFail($id_pengeluaran);
        $pengeluaran->update($validatedData);

        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_pengeluaran)
    {
        $pengeluaran = PengeluaranBarang::findOrFail($id_pengeluaran);
        $pengeluaran->delete();
        return redirect()->route('pengeluaran.index')->with('success', 'Pengeluaran barang berhasil dihapus');
    }
}
