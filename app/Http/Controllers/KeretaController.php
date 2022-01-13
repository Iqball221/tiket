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
         
        return view('kereta.create');
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
      
        return view('kereta.edit', compact('kereta'));
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

    ]);

        $kereta = Kereta::findOrFail($id);
       
        $kereta->nama_kereta = $request->jam_berangkat;
    
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kereta  $kereta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kereta = Kereta::findOrfaill($id);
        $kerata->delete();
        return redirect()->route('kereta.index');
    }
}
