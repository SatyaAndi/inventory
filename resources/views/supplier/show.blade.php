@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Detail Supplier</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_supplier">Kode Supplier</label>
                        <input type="text" name="kode_supplier" id="kode_supplier" class="form-control" value="{{ $supplier->kode_supplier }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nama_supplier">Nama Supplier</label>
                        <input type="text" name="nama_supplier" id="nama_supplier" class="form-control" value="{{ $supplier->nama_supplier }}" readonly>
                        </
