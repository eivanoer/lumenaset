<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyusutan extends Model
{
	//protected $table = 'penyusutans';
    protected $fillable = [
        'id_aset', 'id_golongan', 'masa_manfaat', 'tarif', 
    ];
    protected $hidden = [];
}
//