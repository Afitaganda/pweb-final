<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;

class SupplyReportController extends Controller
{
    public function show()
    {
        $totalSupply = produk::sum('stok');

        return view('reports.supply', compact('totalSupply'));
    }
}
