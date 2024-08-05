<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\OrderBarang;
use App\Models\Barang;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderDetails = OrderDetail::all();
        return view('orderdetail.index', compact('orderDetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderBarangs = OrderBarang::all();
        $barangs = Barang::all();
        return view('orderdetail.create', compact('orderBarangs', 'barangs'));
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
            'no_po' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required|integer',
            'kuantiti' => 'required|integer',
            'tanggal_simpan' => 'required|date',
        ]);

        OrderDetail::create($validatedData);

        return redirect()->route('orderdetail.index')
                        ->with('success', 'Detail order berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderDetail = OrderDetail::findOrFail($id);
        return view('orderdetail.show', compact('orderDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orderDetail = OrderDetail::findOrFail($id);
        $orderBarangs = OrderBarang::all();
        $barangs = Barang::all();
        return view('orderdetail.edit', compact('orderDetail', 'orderBarangs', 'barangs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'no_po' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'harga_barang' => 'required|integer',
            'kuantiti' => 'required|integer',
            'tanggal_simpan' => 'required|date',
        ]);

        $orderDetail = OrderDetail::findOrFail($id);
        $orderDetail->update($validatedData);

        return redirect()->route('orderdetail.index')
                        ->with('success', 'Detail order berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderDetail = OrderDetail::findOrFail($id);
        $orderDetail->delete();

        return redirect()->route('orderdetail.index')
                        ->with('success', 'Detail order berhasil dihapus');
    }
}
