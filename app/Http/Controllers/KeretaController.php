<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = Kereta::all();
        return view('kereta.index', compact('kereta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $penumpang = Penumpang::all();
        return view('kereta.create', compact('penumpang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kereta = new Kereta;
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->jam_berangkat = $request->jam_berangkat;
        $kereta->asal_berangkat = $request->asal_berangkat;
        $kereta->tujuan_berangkat = $request->tujuan_berangkat;
        $kereta->id_penumpang = $request->id_penumpang;
        $kereta->save();
        return redirect()->route('kereta.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kereta = Kereta::findOrfail($id);
        return view('kereta.show', compact('kereta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kereta = Kereta::findOrfail($id);
        $penumpang = Penumpang::all();
        return view('kereta.edit', compact('kereta', 'penumpang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kereta' => 'required',
            'jam_berangkat' => 'required',
            'asal_berangkat' => 'required',
            'tujuan_berangkat' => 'required',
            'id_penumpang' => 'required',
    ]);

        $kereta = Kereta::findOrFail($id);
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->jam_berangkat = $request->jam_berangkat;
        $kereta->asal_berangkat = $request->asal_berangkat;
        $kereta->tujuan_berangkat = $request->tujuan_berangkat;
        $kereta->id_penumpang = $request->id_penumpang;
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kereta $kereta)
    {
        $kereta = Kereta::findOrfaill($id);
        $kerata->Delete();
        return redirect()->route('kereta.index')
    }
}
