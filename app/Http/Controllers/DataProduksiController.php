<?php

namespace App\Http\Controllers;

use App\Models\DataProduksimodel;
use Illuminate\Http\Request;
use Throwable;

class DataProduksiController extends Controller
{
    public function index()
    {
        $dataproduksi = DataProduksimodel::all();
        return view('data_produksi.index', compact('dataproduksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stok_bibit' => 'required',
            'tgl_produksi' => 'required',
            'jml_produksi' => 'required',
            'hasi_produksi' => 'required',
            'keterangan' => 'required',
        ]);

        DataProduksimodel::create([
            'stok_bibit' => $request->stok_bibit,
            'tgl_produksi' => $request->tgl_produksi,
            'jml_produksi' => $request->jml_produksi,
            'hasil_produksi' => $request->hasil_produksi,
            'keterangan' => $request->keterangan,
        ]);

        // try {
        //     return redirect()->route('dataproduksi.index')->with('success', 'Data berhasil disimpan'); 
        // } catch (Throwable $e) {
        //     report($e);
        //     return redirect()->route('dataproduksi.index')->with('catch', 'Data harus diisi');
        // }
    }
    // public function tambah_data()
    // {
    //     return view('tbl_dataproduksi.tambah_data');
    // }

    // public function edit_data($id)
    // {
    //     $peg = DataProduksi::findorfail($id);
    //     return view('tbl_dataproduksi.edit_data', compact('peg'));
    // }

    // public function update_data(Request $request, $id)
    // {
    //     $peg = DataProduksi::findorfail($id);
    //     $peg->update($request->all());
    //     return redirect('dataproduksi')->with('toast_success', 'Data Berhasil Update');
    // }

    // public function delete_data($id)
    // {
    //     $peg = DataProduksi::findorfail($id);
    //     $peg->delete();
    //     return back();
    // }

    // public function store(Request $request)
    // {
    //     DataProduksi:: create([
    //         'nama' => $request->nama,
    //         'alamat' => $request->alamat,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'tgl_lahir' => $request->tgl_lahir,
    //     ]);

    //     return redirect('dataproduksi');
    // }
}

