@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Pengeluaran Barang</h1>
    <form action="{{ route('pengeluaran_barang.update', $pengeluaran_barang->id_pengeluaran) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="tgl_keluar">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" value="{{ $pengeluaran_barang->tgl_keluar }}" required>
        </div>
        <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $pengeluaran_barang->tujuan }}" required>
        </div>
        <div class="form-group">
            <label for="kode_barang">Barang</label>
            <select class="form-control" id="kode_barang" name="kode_barang" required>
                @foreach($barangs as $barang)
                <option value="{{ $barang->kode_barang }}" {{ $pengeluaran_barang->kode_barang == $barang->kode_barang ? 'selected' : '' }}>{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kuantity">Kuantity</label>
            <input type="number" class="form-control" id="kuantity" name="kuantity" value="{{ $pengeluaran_barang->kuantity }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection