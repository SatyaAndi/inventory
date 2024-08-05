<?php

namespace App\Http\Controllers;

use App\Models\OrderBarang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class OrderBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderBarang::all();
        return view('orderbarang.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('orderbarang.create', compact('suppliers'));
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
            'no_po' => 'required|unique:orderbarang,no_po',
            'tanggal' => 'required|date',
            'kode_supplier' => 'required',
            'PPN' => 'required|integer',
        ]);

        OrderBarang::create($validatedData);

        return redirect()->route('orderbarang.index')
            ->with('success', 'Order barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $no_po
     * @return \Illuminate\Http\Response
     */
    public function show($no_po)
    {
        $order = OrderBarang::findOrFail($no_po);
        return view('orderbarang.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $no_po
     * @return \Illuminate\Http\Response
     */
    public function edit($no_po)
    {
        $order = OrderBarang::findOrFail($no_po);
        $suppliers = Supplier::all();
        return view('orderbarang.edit', compact('order', 'suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $no_po
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $no_po)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'kode_supplier' => 'required',
            'PPN' => 'required|integer',
        ]);

        $order = OrderBarang::findOrFail($no_po);
        $order->update($validatedData);

        return redirect()->route('orderbarang.index')
            ->with('success', 'Order barang berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $no_po
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_po)
    {
        $order = OrderBarang::findOrFail($no_po);
        $order->delete();

        return redirect()->route('orderbarang.index')
            ->with('success', 'Order barang berhasil dihapus');
    }
}
