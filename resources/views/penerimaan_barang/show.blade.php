@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penerimaan Barang</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $penerimaan_barang->barang->nama_barang }}</h5>
            <p class="card-text">Tanggal Penyimpanan: {{ $penerimaan_barang->tgl_penyimpanan }}</p>
            <p class="card-text">Alamat: {{ $penerimaan_barang->alamat }}</p>
            <p class="card-text">Kuantity: {{ $penerimaan_barang->kuantity }}</p>
            <a href="{{ route('penerimaan_barang.edit', $penerimaan_barang->id_penerimaan) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('penerimaan_barang.destroy', $penerimaan_barang->id_penerimaan) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
@endsection