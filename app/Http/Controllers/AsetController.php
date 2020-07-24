<?php

namespace App\Http\Controllers\API;

/*use App\Aset;
use App\Golongan;
use App\Kelompok;
use App\KodePerkiraan;
use App\SubPerkiraan;
use App\Lokasi;
use App\Kondisi;
use App\SumberDana;
use App\Satuan;*/
use App\Aset;
use Illuminate\Http\Request;

class AsetController extends Controller
{

    public function showAllAnggota(){
        return response()->json(Aset::all());
    }

    public function loadDetail(){
       $query ="SELECT CONCAT (id_golongan,'.',id_kelompok,'.',id_kodeperkiraan,'.',id_subperkiraan) AS kode, asets.nama, asets.id_satuan, 
       asets.volume,asets.harga_perolehan, asets.tahun_perolehan, asets.id_sumberdana, asets.tarif, asets.id_golongan, asets.id_kondisi, asets.id_lokasi, asets.keterangan, asets.foto
       FROM asets";
       $result = app('db')->select($query);
        return response()->json($result, 200);
    }

    public function showOneAnggota($kode){
        return response()->json(Aset::find($kode));
    }

    public function create(Request $request){
        
        $author = Aset::create($request->all());
        return response()->json($author, 201);
    }

    public function update($id, Request $request){
        $author = Aset::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }

    public function delete($id){
        Aset::findOrFail($id)->delete();
        return response('Berhasil Dihapus', 200);
    }
}