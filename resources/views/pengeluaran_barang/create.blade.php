@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Pengeluaran Barang</h1>
    <form action="{{ route('pengeluaran_barang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="tgl_keluar">Tanggal Keluar</label>
            <input type="date" class="form-control" id="tgl_keluar" name="tgl_keluar" required>
        </div>
        <div class="form-group">
            <label for="tujuan">Tujuan</label>
            <input type="text" class="form-control" id="tujuan" name="tujuan" required>
        </div>
        <div class="form-group">
            <label for="kode_barang">Barang</label>
            <select class="form-control" id="kode_barang" name="kode_barang" required>
                @foreach($barangs as $barang)
                <option value="{{ $barang->kode_barang }}">{{ $barang->nama_barang }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kuantity">Kuantity</label>
            <input type="number" class="form-control" id="kuantity" name="kuantity" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection