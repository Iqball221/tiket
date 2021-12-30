<?php

namespace App\Http\Controllers;

use App\Models\Penumpang;
use Illuminate\Http\Request;

class PenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penumpang = Penumpang::all();
        return view('penumpang.index', compact('penumpang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('penumpang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penumpang = new Penumpang;
        $penumpang->nama=$request->nama;
        $penumpang->jk=$request->jk;
        $penumpang->no_hp=$request->no_hp;
        $penumpang->jenis_tiket=$request->jenis_tiket;
        $penumpang->asal=$request->asal;
        $penumpang->tujuan=$request->tujuan;
        $penumpang->tgl_berangkat=$request->tgl_berangkat;
        $penumpang->jumlah=$request->jumlah;
        $penumpang->total=$request->total;
        $penumpang->save();
        return redirect()->route('penumpang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penumpang = Penumpang::findOrfail($id);
        return view('penumpang.show', compact('penumpang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penumpang = Penumpang::findOrfail($id);
        return view('penumpang.edit', compact('penumpang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penumpang  $penumpangreturn redirect()->route('penumpang.index');
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $penumpang = Penumpang::findOrfail($id);
        $penumpang->nama = $request->nama;
        $penumpang->jk = $request->jk;
        $penumpang->no_hp = $request->no_hp;
        $penumpang->jenis_tiket = $request->jenis_tiket;
        $penumpang->asal = $request->asal;
        $penumpang->tujuan = $request->tujuan;
        $penumpang->tgl_berangkat = $request->tgl_berangkat;
        $penumpang->jumlah = $request->jumlah;
        $penumpang->total = $request->total;
        $penumpang->save();
        return redirect()->route('penumpang.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penumpang  $penumpang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penumpang $penumpang)
    {
        $penumpang = Penumpang::findOrfail($id);
        $penumpang->delete();
        return redirect()->route('penumpang.index');

    }
}
