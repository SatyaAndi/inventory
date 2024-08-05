@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="my-4">Daftar Penerimaan Barang</h1>
            <a href="{{ route('penerimaan.create') }}" class="btn btn-primary mb-3">Tambah Penerimaan Barang</a>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID Penerimaan</th>
                            <th>Tanggal Penyimpanan</th>
                            <th>Alamat</th>
                            <th>Quantity</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penerimaans as $penerimaan)
                        <tr>
                            <td>{{ $penerimaan->id_penerimaan }}</td>
                            <td>{{ $penerimaan->tanggal_penyimpanan }}</td>
                            <td>{{ $penerimaan->alamat }}</td>
                            <td>{{ $penerimaan->kuantity }}</td>
                            <td>{{ $penerimaan->kode_barang }}</td>
                            <td>{{ $penerimaan->barang->nama_barang }}</td>
                            <td>
                                <a href="{{ route('penerimaan.show', $penerimaan->id_penerimaan) }}" class="btn btn-info btn-sm">Lihat</a>
                                <a href="{{ route('penerimaan.edit', $penerimaan->id_penerimaan) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('penerimaan.destroy', $penerimaan->id_penerimaan) }}" method="POST" style="display:inline-block;">
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
