@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pengeluaran Barang</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $pengeluaran_barang->barang->nama_barang }}</h5>
            <p class="card-text">Tanggal Keluar: {{ $pengeluaran_barang->tgl_keluar }}</p>
            <p class="card-text">Tujuan: {{ $pengeluaran_barang->tujuan }}</p>
            <p class="card-text">Kuantity: {{ $pengeluaran_barang->kuantity }}</p>
            <a href="{{ route('pengeluaran_barang.edit', $pengeluaran_barang->id_pengeluaran) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('pengeluaran_barang.destroy', $pengeluaran_barang->id_pengeluaran) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection