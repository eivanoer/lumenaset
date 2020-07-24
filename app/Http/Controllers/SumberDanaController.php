<?php

namespace App\Http\Controllers\API;

use App\SumberDana;
use Illuminate\Http\Request;

class SumberDanaController extends Controller
{

    public function showAllAnggota(){
        return response()->json(SumberDana::all());
    }

    public function showOneAnggota($kode){
        return response()->json(SumberDana::find($kode));
    }

    public function create(Request $request){
        
        $author = SumberDana::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = SumberDana::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        SumberDana::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}