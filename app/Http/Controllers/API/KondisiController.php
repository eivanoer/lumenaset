<?php

namespace App\Http\Controllers\API;

use App\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Kondisi::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Kondisi::find($kode));
    }

    public function create(Request $request){
        
        $author = Kondisi::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Kondisi::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Kondisi::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}