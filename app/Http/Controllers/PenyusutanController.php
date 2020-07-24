<?php

namespace App\Http\Controllers\API;

use App\Penyusutan;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PenyusutanController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Penyusutan::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Penyusutan::find($kode));
    }

    public function create(Request $request){
        
        $author = Penyusutan::create($request->all());
        return response()->json($author, 201);
        
    }

    public function update($id, Request $request){
        $author = Penyusutan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Penyusutan::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}