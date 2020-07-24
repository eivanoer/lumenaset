<?php

namespace App\Http\Controllers\API;

use App\SubPerkiraan;
use Illuminate\Http\Request;

class SubPerkiraanController extends Controller
{

    public function showAllAnggota(){
        return response()->json(SubPerkiraan::all());
    }

    public function showOneAnggota($kode){
        return response()->json(SubPerkiraan::find($kode));
    }

    public function create(Request $request){
        
        $author = SubPerkiraan::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = SubPerkiraan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        SubPerkiraan::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}