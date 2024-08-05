@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Daftar Supplier</div>
                <div class="card-body">
                    <a href="{{ route('supplier.create') }}" class="btn btn-primary mb-3">Tambah Supplier</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Kode Supplier</th>
                                <th scope="col">Nama Supplier</th>
                                <th scope="col">Telepon</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->kode_supplier }}</td>
                                <td>{{ $supplier->nama_supplier }}</td>
                                <td>{{ $supplier->telepon }}</td>
                                <td>{{ $supplier->alamat }}</td>
                                <td>
                                    <a href="{{ route('supplier.show', $supplier->kode_supplier) }}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{ route('supplier.edit', $supplier->kode_supplier) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('supplier.destroy', $supplier->kode_supplier) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this supplier?')">Hapus</button>
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
</div>
@endsection
