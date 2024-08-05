@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Daftar Pengeluaran Barang</h1>
            <a href="{{ route('pengeluaran.create') }}" class="btn btn-primary mb-3">Tambah Pengeluaran Barang</a>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Pengeluaran</th>
                            <th>Tanggal Keluar</th>
                            <th>Tujuan</th>
                            <th>Quantity</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengeluarans as $pengeluaran)
                        <tr>
                            <td>{{ $pengeluaran->id_pengeluaran }}</td>
                            <td>{{ $pengeluaran->tanggal_keluar }}</td>
                            <td>{{ $pengeluaran->tujuan }}</td>
                            <td>{{ $pengeluaran->kuantity }}</td>
                            <td>{{ $pengeluaran->kode_barang }}</td>
                            <td>{{ $pengeluaran->barang->nama_barang }}</td>
                            <td>
                                <a href="{{ route('pengeluaran.show', $pengeluaran->id_pengeluaran) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('pengeluaran.edit', $pengeluaran->id_pengeluaran) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('pengeluaran.destroy', $pengeluaran->id_pengeluaran) }}" method="POST" style="display:inline-block;">
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
