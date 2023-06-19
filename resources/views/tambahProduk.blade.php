@extends('app')

@section('content')
    <form action="{{ isset($produk) ? route('produk.edit.update', $produk->produk_id) : route('produk.tambah.simpan') }}" method="post">
    {{-- <form action="{{ isset($produk) ? route('produk.edit.update', $produk->produk_id) : route('produk.simpan') }}" method="post"> --}}
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">{{ isset($produk)?'Form Edit Produk':'Form Tambah Produk' }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" required value="{{ isset($produk) ? $produk->nama : '' }}">

                            <label for="stok">stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" required value="{{ isset($produk) ? $produk->stok : '' }}">

                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" required value="{{ isset($produk) ? $produk->harga : '' }}">

                            <label for="keterangan">keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ isset($produk) ? $produk->keterangan : '' }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('produk.index') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
