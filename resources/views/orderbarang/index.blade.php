@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar Order Barang</div>

                <div class="card-body">
                    <a href="{{ route('orderbarang.create') }}" class="btn btn-primary mb-3">Tambah Order Barang</a>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No PO</th>
                                <th>Tanggal</th>
                                <th>Kode Supplier</th>
                                <th>PPN</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->no_po }}</td>
                                <td>{{ $order->tanggal }}</td>
                                <td>{{ $order->kode_supplier }}</td>
                                <td>{{ $order->PPN }}</td>
                                <td>
                                    <a href="{{ route('orderbarang.show', $order->no_po) }}" class="btn btn-info btn-sm">Show</a>
                                    <a href="{{ route('orderbarang.edit', $order->no_po) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('orderbarang.destroy', $order->no_po) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
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
