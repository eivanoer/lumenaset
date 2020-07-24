<?php

namespace App\Http\Controllers\API;

use App\KodePerkiraan;
use Illuminate\Http\Request;

class KodePerkiraanController extends Controller
{

    public function showAllAnggota(){
        return response()->json(KodePerkiraan::all());
    }

    public function showOneAnggota($kode){
        return response()->json(KodePerkiraan::find($kode));
    }

    public function create(Request $request){
        
        $author = KodePerkiraan::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = KodePerkiraan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        KodePerkiraan::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}