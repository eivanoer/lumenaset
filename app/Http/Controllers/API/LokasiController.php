<?php

namespace App\Http\Controllers\API;

use App\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Lokasi::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Lokasi::find($kode));
    }

    public function create(Request $request){
        
        $author = Lokasi::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Lokasi::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Lokasi::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}