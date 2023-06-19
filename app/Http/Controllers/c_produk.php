<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class c_produk extends Controller
{
    protected function index()
    {
        $produk = produk::get();
        return view('produk', ['produk' => $produk]);
    }

    public function tambah()
    {
        return view('tambahProduk');
    }

    public function simpan(Request $request)
    {
        // Validate
        $request->validate([
            'nama' => 'required|max:50', 
            'stok' => 'required|integer|digits_between:1,11', 
            'harga' => 'required|integer|digits_between:1,11', 
            'keterangan' => 'max:100'
        ],
    );

        // give id prd
        $kode_produk = 'PRD';
        $i = 1;
        while ($i >= 0) {
            $produk_id = $kode_produk . $i;

            $produk = produk::where('produk_id', $produk_id)->first();
            if (!$produk) {
                break;
            }
    
            $i++;
        }

        $data = [
            'produk_id' => $produk_id,
            'nama'=>$request->nama,
            'stok'=>$request->stok,
            'harga'=>$request->harga,
            'keterangan'=>$request->keterangan,
        ];

        produk::create($data);
        return redirect()->route('produk.index')->with('messageBerhasil', 'Data berhasil disimpan!');
    }

    public function edit($produk_id)
    {
        $dataProduk = produk::where('produk_id', $produk_id)->firstOrFail();
        // dd($dataProduk->nama);
        return view('tambahProduk')->with(['produk'=>$dataProduk]);
    }

    public function update($produk_id, Request $request)
    {
        // Validate
        $request->validate([
            'nama' => 'required', 
            'stok' => 'required|integer|digits_between:1,11', 
            'harga' => 'required|integer|digits_between:1,11', 
        ],
    );

            $data = [
                'produk_id' => $produk_id,
                'nama'=>$request->nama,
                'stok'=>$request->stok,
                'harga'=>$request->harga,
                'keterangan'=>$request->keterangan,
            ];

        produk::where('produk_id', $produk_id)->update($data);
        return redirect()->route('produk.index')->with('message', 'Data berhasil disimpan!');
    }

    public function hapus($produk_id)
    {
        produk::where('produk_id', $produk_id)->delete();
        return redirect()->route('produk.index');
    }
}
