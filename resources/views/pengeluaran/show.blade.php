@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Detail Pengeluaran Barang</h1>

            <div class="card">
                <div class="card-header">
                    Detail Pengeluaran
                </div>
                <div class="card-body">
                    <p><strong>ID Pengeluaran:</strong> {{ $pengeluaran->id_pengeluaran }}</p>
                    <p><strong>Tanggal Keluar:</strong> {{ $pengeluaran->tanggal_keluar }}</p>
                    <p><strong>Tujuan:</strong> {{ $pengeluaran->tujuan }}</p>
                    <p><strong>Quantity:</strong> {{ $pengeluaran->kuantity }}</p>
                    <p><strong>Kode Barang:</strong> {{ $pengeluaran->kode_barang }}</p>
                    <p><strong>Nama Barang:</strong> {{ $pengeluaran->barang->nama_barang }}</p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('pengeluaran.index') }}" class="btn btn-primary">Kembali</a>
                    <a href="{{ route('pengeluaran.edit', $pengeluaran->id_pengeluaran) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengeluaran.destroy', $pengeluaran->id_pengeluaran) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
