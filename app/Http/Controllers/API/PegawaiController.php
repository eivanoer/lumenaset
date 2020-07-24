<?php

namespace App\Http\Controllers\API;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Pegawai::all());
    }

    public function showOneAnggota($kode){
        return response()->json(Pegawai::find($kode));
    }

    public function create(Request $request){
        
        $author = Pegawai::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Pegawai::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        User::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}