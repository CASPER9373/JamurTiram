<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StokHasilProduksi extends Controller
{
    public function index()
    {
        return view('stok_barang.StokHasilProduksi');
    }
}

