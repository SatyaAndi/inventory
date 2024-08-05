@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Detail Order Barang</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="no_po">No PO</label>
                        <input type="text" name="no_po" id="no_po" class="form-control" value="{{ $orderDetail->no_po }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_barang" id="kode_barang" class="form-control" value="{{ $orderDetail->kode_barang }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ $orderDetail->nama_barang }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="text" name="harga_barang" id="harga_barang" class="form-control" value="{{ $orderDetail->harga_barang }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="kuantiti">Kuantiti</label>
                        <input type="text" name="kuantiti" id="kuantiti" class="form-control" value="{{ $orderDetail->kuantiti }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_simpan">Tanggal Simpan</label>
                        <input type="text" name="tanggal_simpan" id="tanggal_simpan" class="form-control" value="{{ $orderDetail->tanggal_simpan }}" disabled>
                    </div>

                    <a href="{{ route('orderdetail.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
