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
                        <input type="text" name="no_po" id="no_po" class="form-control" value="{{ $order->no_po }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $order->tanggal }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="text" name="kode_supplier" id="kode_supplier" class="form-control" value="{{ $order->supplier->kode_supplier }} - {{ $order->supplier->nama_supplier }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="PPN">PPN</label>
                        <input type="text" name="PPN" id="PPN" class="form-control" value="{{ $order->PPN }}" disabled>
                    </div>

                    <a href="{{ route('orderbarang.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
