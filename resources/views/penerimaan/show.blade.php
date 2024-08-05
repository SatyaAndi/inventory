@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Detail Penerimaan Barang</div>
                <div class="card-body">
                    <div class="form-group">
                        <label>ID Penerimaan</label>
                        <p>{{ $penerimaan->id_penerimaan }}</p>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Penyimpanan</label>
                        <p>{{ $penerimaan->tanggal_penyimpanan }}</p>
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <p>{{ $penerimaan->alamat }}</p>
                    </div>

                    <div class="form-group">
                        <label>Kode Barang</label>
                        <p>{{ $penerimaan->kode_barang }}</p>
                    </div>

                    <div class="form-group">
                        <label>Kuantitas</label>
                        <p>{{ $penerimaan->kuantity }}</p>
                    </div>

                    <div class="form-group">
                        <label>Nama Barang</label>
                        <p>{{ $penerimaan->barang->nama_barang }}</p>
                    </div>

                    <a href="{{ route('penerimaan.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
