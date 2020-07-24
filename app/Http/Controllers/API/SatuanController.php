<?php

namespace App\Http\Controllers\API;

use App\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Satuan::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Satuan::find($kode));
    }

    public function create(Request $request){
        
        $author = Satuan::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Satuan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Satuan::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}