@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Barang</h1>
    <form action="{{ route('barang.update', $barang->kode_barang) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
        </div>
        <div class="form-group">
            <label for="unit">Unit</label>
            <select class="form-control" id="unit" name="unit" required>
                <option value="Pcs" {{ $barang->unit == 'Pcs' ? 'selected' : '' }}>Pcs</option>
                <option value="Buah" {{ $barang->unit == 'Buah' ? 'selected' : '' }}>Buah</option>
                <option value="Lembar" {{ $barang->unit == 'Lembar' ? 'selected' : '' }}>Lembar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ukuran">Ukuran</label>
            <input type="text" class="form-control" id="ukuran" name="ukuran" value="{{ $barang->ukuran }}" required>
        </div>
        <div class="form-group">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" id="warna" name="warna" value="{{ $barang->warna }}" required>
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $barang->jenis }}" required>
        </div>
        <div class="form-group">
            <label for="harga_satuan">Harga Satuan</label>
            <input type="number" class="form-control" id="harga_satuan" name="harga_satuan" value="{{ $barang->harga_satuan }}" required>
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection