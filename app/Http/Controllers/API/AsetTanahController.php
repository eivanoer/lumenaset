<?php

namespace App\Http\Controllers\API;

use App\AsetTanah;
use Illuminate\Http\Request;

class AsetTanahController extends Controller
{

    public function showAllAnggota(){
        return response()->json(AsetTanah::all());
    }

    public function showOneAnggota($kode){
        return response()->json(AsetTanah::find($nik));
    }

    public function create(Request $request){
        
        $author = AsetTanah::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = AsetTanah::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        AsetTanah::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}