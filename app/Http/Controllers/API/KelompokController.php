<?php

namespace App\Http\Controllers\API;

use App\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Kelompok::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Kelompok::find($kode));
    }

    public function create(Request $request){
        
        $author = Kelompok::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Kelompok::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Kelompok::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}