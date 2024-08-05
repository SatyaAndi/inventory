@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Daftar Barang</h1>
            <a href="{{ route('barang.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Unit</th>
                            <th>Ukuran</th>
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
                            <td>{{ $barang->kode_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->unit }}</td>
                            <td>{{ $barang->ukuran }}</td>
                            <td>{{ $barang->warna }}</td>
                            <td>{{ $barang->jenis }}</td>
                            <td>{{ $barang->harga_satuan }}</td>
                            <td>{{ $barang->stok }}</td>
                            <td>
                                <a href="{{ route('barang.show', $barang->kode_barang) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('barang.edit', $barang->kode_barang) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('barang.destroy', $barang->kode_barang) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
