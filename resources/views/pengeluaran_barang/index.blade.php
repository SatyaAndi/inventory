@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Pengeluaran Barang</h1>
    <a href="{{ route('pengeluaran_barang.create') }}" class="btn btn-primary">Tambah Pengeluaran Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal Keluar</th>
                <th>Tujuan</th>
                <th>Nama Barang</th>
                <th>Kuantity</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengeluaran_barangs as $pengeluaran_barang)
            <tr>
                <td>{{ $pengeluaran_barang->tgl_keluar }}</td>
                <td>{{ $pengeluaran_barang->tujuan }}</td>
                <td>{{ $pengeluaran_barang->barang->nama_barang }}</td>
                <td>{{ $pengeluaran_barang->kuantity }}</td>
                <td>
                    <a href="{{ route('pengeluaran_barang.show', $pengeluaran_barang->id_pengeluaran) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('pengeluaran_barang.edit', $pengeluaran_barang->id_pengeluaran) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pengeluaran_barang.destroy', $pengeluaran_barang->id_pengeluaran) }}" method="POST" style="display:inline-block;">
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