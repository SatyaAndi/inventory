@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="btn btn-primary">Tambah Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Satuan</th>
                <th>Banyak</th>
                <th>Warna</th>
                <th>Jenis</th>
                <th>Harga Satuan</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->nama_barang }}</td>
                <td>{{ $barang->unit }}</td>
                <td>{{ $barang->ukuran }}</td>
                <td>{{ $barang->warna }}</td>
                <td>{{ $barang->jenis }}</td>
                <td>{{ $barang->harga_satuan }}</td>
                <td>{{ $barang->stok }}</td>
                <td>
                    <a href="{{ route('barang.show', $barang->kode_barang) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('barang.edit', $barang->kode_barang) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('barang.destroy', $barang->kode_barang) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection