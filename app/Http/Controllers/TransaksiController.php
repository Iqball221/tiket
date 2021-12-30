<?php

namespace App\Http\Controllers;
use App\Models\Penumpang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        return view('transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penumpang = Penumpang::all();
        return view('transaksi.index', compact('penumpang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;
        $transaksi->jenis_transaksi=$request->jenis_transaksi;
        $transaksi->id_penumpang=$request->id_penumpang;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::findOrfail($id);
        return view('transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::findOrfail($id);
        $penumpang = penumpang::all();
        return view('transaksi.edit', compact('transaksi','penumpang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validated([
            'jenis_transaksi'=>'required',
            'id_penumpang'=>'required',
        ]);

        $transaksi = Transaksi::findOrfail($id);
        $transaksi->jenis_transaksi=$request->jenis_transaksi;
        $transaksi->id_penumpang=$request->id_penumpang;
        $transaksi->save();
        return redirect()->route('transaksi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $transaksi = Transaksi::findOrfail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
