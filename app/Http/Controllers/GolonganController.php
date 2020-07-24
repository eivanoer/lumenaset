<?php

namespace App\Http\Controllers;

use App\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Golongan::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Golongan::find($kode));
    }

    public function create(Request $request){
        
        $author = Golongan::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Golongan::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Golongan::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}