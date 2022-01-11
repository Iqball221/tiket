<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tiket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tiket = new Tiket;
        $tiket->id_penumpang = $request->id_penumpang;
        $tiket->jenis_tiket = $request->jenis_tiket;
        $tiket->no_duduk = $request->no_duduk;
        $tiket->stok = $request->stok;
        $tiket->total_terjual = $request->total_terjual;
        $tiket->sisa_tiket = $request->sisa_tiket;

        $tiket->save();
        return redirect()->route('tiket.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiket = Tiket::findOrfail($id);
        return view('tiket.show', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::findOrfail($id);
        $penumpang = Penumpang::all();
        return view('tiket.edit', compact('tiket', 'penumpang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'jenis_tiket' => 'required',
            'stok' => 'required',
            'harga' => 'required',
             ]);
              $tiket = Kereta::findOrFail($id);
        
        $tiket->jenis_tiket = $request->jenis_tiket;
        $tiket->stok = $request->stok;
        $tiket->harga = $request->total_terjual;
        return redirect()->route('kereta.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tiket $tiket)
    {
        $tiket = Tiket::findOrfaill($id);
        $tiket->Delete();
        return redirect()->route('tiket.index');
    }
}
