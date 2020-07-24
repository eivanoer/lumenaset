<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    protected $fillable = [
        'id_golongan', 
        'id_kelompok', 
        'id_kodeperkiraan', 
        'id_subperkiraan', 
        'id_satuan',
        'id_kondisi',
        'id_lokasi',
        'id_sumberdana',
        'nama',
        'foto',
        'volume',
        'harga_perolehan',
        'tahun_perolehan',
        'tarif',
        'keterangan',
    ];
    protected $hidden = [];

    protected $table = "asets";
}
//

