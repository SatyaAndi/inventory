@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Barang</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $barang->nama_barang }}</h5>
            <p class="card-text">Unit: {{ $barang->unit }}</p>
            <p class="card-text">Ukuran: {{ $barang->ukuran }}</p>
            <p class="card-text">Warna: {{ $barang->warna }}</p>
            <p class="card-text">Jenis: {{ $barang->jenis }}</p>
            <p class="card-text">Harga Satuan: {{ $barang->harga_satuan }}</p>
            <p class="card-text">Stok: {{ $barang->stok }}</p>
            <a href="{{ route('barang.edit', $barang->kode_barang) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('barang.destroy', $barang->kode_barang) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection