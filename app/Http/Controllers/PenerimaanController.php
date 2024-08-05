<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\PenerimaanBarang;
use Illuminate\Http\Request;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaans = PenerimaanBarang::with('barang')->get();
        return view('penerimaan.index', compact('penerimaans'));
    }

    public function create()
    {
        $barangs = Barang::all();
        return view('penerimaan.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kuantity' => 'required|integer',
            'kode_barang' => 'required|exists:barang,kode_barang',
        ]);

        PenerimaanBarang::create($validatedData);

        return redirect()->route('penerimaan.index')->with('success', 'Penerimaan barang berhasil ditambahkan');
    }

    public function show($id_penerimaan)
    {
        $penerimaan = PenerimaanBarang::findOrFail($id_penerimaan);
        return view('penerimaan.show', compact('penerimaan'));
    }

    public function edit($id_penerimaan)
    {
        $penerimaan = PenerimaanBarang::findOrFail($id_penerimaan);
        $barangs = Barang::all();
        return view('penerimaan.edit', compact('penerimaan', 'barangs'));
    }

    public function update(Request $request, $id_penerimaan)
    {
        $validatedData = $request->validate([
            'tanggal_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kuantity' => 'required|integer',
            'kode_barang' => 'required|exists:barang,kode_barang',
        ]);

        $penerimaan = PenerimaanBarang::findOrFail($id_penerimaan);
        $penerimaan->update($validatedData);

        return redirect()->route('penerimaan.index')->with('success', 'Penerimaan barang berhasil diupdate');
    }

    public function destroy($id_penerimaan)
    {
        $penerimaan = PenerimaanBarang::findOrFail($id_penerimaan);
        $penerimaan->delete();
        return redirect()->route('penerimaan.index')->with('success', 'Penerimaan barang berhasil dihapus');
    }
}
