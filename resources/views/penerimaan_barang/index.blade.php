@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penerimaan Barang</h1>
    <a href="{{ route('penerimaan_barang.create') }}" class="btn btn-primary">Tambah Penerimaan Barang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Tanggal Penyimpanan</th>
                <th>Alamat</th>
                <th>Nama Barang</th>
                <th>Kuantity</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penerimaan_barangs as $penerimaan_barang)
            <tr>
                <td>{{ $penerimaan_barang->tgl_penyimpanan }}</td>
                <td>{{ $penerimaan_barang->alamat }}</td>
                <td>{{ $penerimaan_barang->barang->nama_barang }}</td>
                <td>{{ $penerimaan_barang->kuantity }}</td>
                <td>
                    <a href="{{ route('penerimaan_barang.show', $penerimaan_barang->id_penerimaan) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('penerimaan_barang.edit', $penerimaan_barang->id_penerimaan) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('penerimaan_barang.destroy', $penerimaan_barang->id_penerimaan) }}" method="POST" style="display:inline-block;">
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