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
       // $query ="SELECT CONCAT (id_golongan,'.',id_kelompok,'.',id_kodeperkiraan,'.',id_subperkiraan) AS kode, asets.id, asets.nama, asets.id_satuan, 
       // asets.volume,asets.harga_perolehan, asets.tahun_perolehan, asets.id_sumberdana, asets.tarif, asets.id_golongan, asets.id_kondisi, asets.id_lokasi, asets.keterangan, asets.foto
       // FROM asets";
       // $result = app('db')->select($query);
       //  return response()->json($result, 200);

    }

    public function showOneAnggota($id){

        $aset = Aset::findOrFail($id);

        

        
            # code...
            $aray [] = [
                'kodeAset' => $aset->id_golongan.".".$aset->id_kelompok,
                'nama' => $aset->nama
            ];
        

        return $aray;
        //return response()->json(Aset::find($id));
    }

    public function create(Request $request){
        
        $id_golongan = $request->input("id_golongan");
        $id_kelompok = $request->input("id_kelompok");

        // $data = [
        //     'kode_aset' => $id_golongan.".".$id_kelompok
        // ];

        // Aset::create($data);

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