<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class ApiController extends Controller
{
     public function index()
    {
          
    $kereta = Kereta::all();
       return response()->json([
           'succes' => true,
           'message' => 'list data kereta',
           'data' => $kereta
       ], 200);
    }
    public function create(){

    }

    public function store(Request $request){
        $kereta = new Kereta;
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->save();

       
        return response()->json([
           'succes' => true,
           'message' => 'list tambah kereta',
           'data' => $kereta
       ], 200); 

    }
    public function show($id){
         $kereta = Kereta::all();
       return response()->json([
           'succes' => true,
           'message' => 'list data kereta',
           'data' => $kereta
       ], 200);
    }
    public function edit($id)
    {
    

        $kereta = Kereta::findOrFail($id);
        $kereta->nama_kereta = $request->jam_berangkat;
        $kereta->save();
        return redirect()->route('kereta.index');

        return response()->json([
           'succes' => true,
           'message' => 'list tambah kereta',
           'data' => $kereta
       ], 200);
    }
}