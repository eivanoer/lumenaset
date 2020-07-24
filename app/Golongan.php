<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
	protected $table = 'golongans';
    protected $fillable = [
        'kode',  'nama', 
    ];
    protected $hidden = [];
}
//
