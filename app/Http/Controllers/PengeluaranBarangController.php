<?php

namespace App\Http\Controllers;

use App\Models\PengeluaranBarang;
use App\Models\Barang;
use Illuminate\Http\Request;

class PengeluaranBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengeluaran_barangs = PengeluaranBarang::all();
        return view('pengeluaran_barang.index', compact('pengeluaran_barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('pengeluaran_barang.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tgl_keluar' => 'required|date',
            'tujuan' => 'required',
            'kode_barang' => 'required',
            'kuantity' => 'required|integer',
        ]);

        PengeluaranBarang::create($request->all());
        return redirect()->route('pengeluaran_barang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PengeluaranBarang $pengeluaran_barang)
    {
        return view('pengeluaran_barang.show', compact('pengeluaran_barang'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PengeluaranBarang $pengeluaran_barang)
    {
        $barangs = Barang::all();
        return view('pengeluaran_barang.edit', compact('pengeluaran_barang', 'barangs'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PengeluaranBarang $pengeluaran_barang)
    {
        $request->validate([
            'tgl_keluar' => 'required|date',
            'tujuan' => 'required',
            'kode_barang' => 'required',
            'kuantity' => 'required|integer',
        ]);

        $pengeluaran_barang->update($request->all());
        return redirect()->route('pengeluaran_barang.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PengeluaranBarang $pengeluaran_barang)
    {
        $pengeluaran_barang->delete();
        return redirect()->route('pengeluaran_barang.index');

    }
}
