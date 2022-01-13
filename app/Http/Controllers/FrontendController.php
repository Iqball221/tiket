<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    $dataTransaksi = DataTransaksi::all();
    $tiket = Tiket::all();
    $kereta = Kereta::all();
        return view('dataTransaksi.index', compact('dataTransaksi','tiket','kereta'));
}

public function store(Request $request)
    {
        $dataTransaksi = new Kereta;
        $dataTransaksi->nama = $request->nama;
        $dataTransaksi->jk = $request->jk;
        $dataTransaksi->no_hp = $request->no_hp;
        $dataTransaksi->id_kereta = $request->id_kereta;
        $dataTransaksi->id_tiket = $request->id_tiket;
        $dataTransaksi->jam_berangkat = $request->jam_berangkat;
        $dataTransaksi->asal_berangkat = $request->asal_berangkat;
        $dataTransaksi->tujuan_berangkat = $request->tujuan_berangkat;
        $dataTransaksi->no_duduk = $request->no_duduk;
        $dataTransaksi->jumlah = $request->jumlah;
        

        $dataTransaksi->save();
        return redirect()->route('kereta.index');
    }