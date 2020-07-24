<?php

namespace App\Http\Controllers\API;

use App\Mutasi;
use Illuminate\Http\Request;

class MutasiController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Mutasi::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Mutasi::find($kode));
    }

    public function create(Request $request){
        
        $author = Mutasi::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Mutasi::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Mutasi::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}