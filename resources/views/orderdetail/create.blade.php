<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Tambah Detail Order Barang</div>

                <div class="card-body">
                    <form action="{{ route('orderdetail.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="no_po">No PO</label>
                            <select name="no_po" id="no_po" class="form-control" required>
                                @foreach($orderBarangs as $orderBarang)
                                <option value="{{ $orderBarang->no_po }}">{{ $orderBarang->no_po }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <select name="kode_barang" id="kode_barang" class="form-control" required>
                                @foreach($barangs as $barang)
                                <option value="{{ $barang->kode_barang }}">{{ $barang->kode_barang }} - {{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ old('nama_barang') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="harga_barang">Harga Barang</label>
                            <input type="number" name="harga_barang" id="harga_barang" class="form-control" value="{{ old('harga_barang') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="kuantiti">Kuantiti</label>
                            <input type="number" name="kuantiti" id="kuantiti" class="form-control" value="{{ old('kuantiti') }}" required>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_simpan">Tanggal Simpan</label>
                            <input type="date" name="tanggal_simpan" id="tanggal_simpan" class="form-control" value="{{ old('tanggal_simpan') }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('orderdetail.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
