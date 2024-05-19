<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanBarang;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenerimaanBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerimaan_barangs = PenerimaanBarang::all();
        return view('penerimaan_barang.index', compact('penerimaan_barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = Barang::all();
        return view('penerimaan_barang.create', compact('barangs'));
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
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required',
            'kuantity' => 'required|integer',
        ]);

        PenerimaanBarang::create($request->all());
        return redirect()->route('penerimaan_barang.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenerimaanBarang $penerimaan_barang)
    {
        return view('penerimaan_barang.show', compact('penerimaan_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(PenerimaanBarang $penerimaan_barang)
    {
        $barangs = Barang::all();
        return view('penerimaan_barang.edit', compact('penerimaan_barang', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PenerimaanBarang $penerimaan_barang)
    {
        $request->validate([
            'tgl_penyimpanan' => 'required|date',
            'alamat' => 'required',
            'kode_barang' => 'required',
            'kuantity' => 'required|integer',
        ]);

        $penerimaan_barang->update($request->all());
        return redirect()->route('penerimaan_barang.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(PenerimaanBarang $penerimaan_barang)
    {
        $penerimaan_barang->delete();
        return redirect()->route('penerimaan_barang.index');

    }
}
