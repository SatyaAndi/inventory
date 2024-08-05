<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_supplier' => 'required|unique:supplier,kode_supplier',
            'nama_supplier' => 'required',
            'telepon' => 'required|digits_between:1,20',
            'alamat' => 'required',
        ]);

        Supplier::create($validatedData);

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $kode_supplier
     * @return \Illuminate\Http\Response
     */
    public function show($kode_supplier)
    {
        $supplier = Supplier::findOrFail($kode_supplier);
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $kode_supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_supplier)
    {
        $supplier = Supplier::findOrFail($kode_supplier);
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $kode_supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_supplier)
    {
        $validatedData = $request->validate([
            'nama_supplier' => 'required',
            'telepon' => 'required|digits_between:1,20',
            'alamat' => 'required',
        ]);

        $supplier = Supplier::findOrFail($kode_supplier);
        $supplier->update($validatedData);

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $kode_supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_supplier)
    {
        $supplier = Supplier::findOrFail($kode_supplier);
        $supplier->delete();

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier berhasil dihapus');
    }
}
