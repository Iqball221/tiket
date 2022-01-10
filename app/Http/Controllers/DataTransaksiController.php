<?php

namespace App\Http\Controllers;
use App\Models\DataTransaksi;
use App\Models\Penumpang;
use App\Models\Transaksi;
use App\Models\Kereta;
use App\Models\Tiket;
use Illuminate\Http\Request;

class DataTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dataTransaksi = DataTransaksi::all();
        return view('dataTransaksi.index', compact('dataTransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $penumpang = Penumpang::all();
        $transaksi = Transaksi::all();
        $kereta = Kereta::all();
        $tiket = Tiket::all();
        return view('dataTransaksi.create',compact('penumpang','transaksi','kereta','tiket'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataTransaksi = new Kereta;
        $dataTransaksi->id_penumpang = $request->id_penumpang;
        $dataTransaksi->id_transaksi = $request->id_transaksi;
        $dataTransaksi->id_kereta = $request->id_kereta;
        $dataTransaksi->id_tiket = $request->id_tiket;
        $dataTransaksi->asal = $request->asal;
        $dataTransaksi->tujuan = $request->tujuan;
        $dataTransaksi->asal_berangkat = $request->asal_berangkat;
        $dataTransaksi->tujuan_berangkat = $request->tujuan_berangkat;
        $dataTransaksi->jumlah = $request->jumlah;
        $dataTransaksi->total = $request->total;

        $dataTransaksi->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataTransaksi = DataTransaksi::findOrfail($id);
        return view('dataTransaksi.show', compact('dataTransaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penumpang = Penumpang::all();
        $transaksi = Transaksi::all();
        $kereta = Kereta::all();
        $tiket = Tiket::all();
        $dataTransaksi = DataTransaksi::all();
        return view('dataTransaksi.create',compact('penumpang','transaksi','kereta','tiket','dataTransaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_penumpang' => 'required',
            'id_transaksi' => 'required',
            'id_kereta' => 'required',
            'id_tiket' => 'required',
            'asal' => 'required',
            'tujuan' => 'required',
            'jumlah' => 'required',
            'total' => 'required',
            
        ]);
        $dataTransaksi = DataTransaksi::findOrFail($id);
        $dataTransaksi->id_penumpang = $request->id_penumpang;
        $dataTransaksi->id_transaksi = $request->id_transaksi;
        $dataTransaksi->id_kereta = $request->id_kereta;
        $dataTransaksi->id_tiket = $request->id_tiket;
        $dataTransaksi->asal = $request->asal;
        $dataTransaksi->tujuan = $request->tujuan;
        $dataTransaksi->jumlah = $request->jumlah;
        $dataTransaksi->total = $request->total;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataTransaksi  $dataTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataTransaksi $dataTransaksi)
    {
        $dataTransaksi = Kereta::findOrfaill($id);
        $dataTransaksi->Delete();
        return redirect()->route('dataTransaksi.index')
    }
}
