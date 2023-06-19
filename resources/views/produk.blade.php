@extends('app')

@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable
        </div>
        <div class="card-body">
            <a href="{{ route("produk.tambah") }}" class="btn btn-primary mb-3">Tambahkan Produk</a>
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th >Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($produk as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td >{{ $row->nama }}</td>
                        <td>{{ $row->stok }}</td>
                        <td>{{ $row->harga }}</td>
                        <td style="max-width:200px; height:100px">
                            <div style="height:100%; overflow: auto">
                                {{ $row->keterangan }}
                            </div>
                        </td>
                        <td style="max-width:95px">
                            {{-- <a href="{{ route('produk.edit', $row->produk_id) }}" class="btn btn-warning">Edit</a> --}}
                            <a href="{{ route('produk.edit', $row->produk_id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{ route('produk.hapus', $row->produk_id) }}" class="btn btn-danger" id="sweetDelete">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
