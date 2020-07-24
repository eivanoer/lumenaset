<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = [
        'id_aset', 'id_lokasi', 'masa_kondisi', 'tanggal_mutasi', 
    ];
    protected $hidden = [];
}
//