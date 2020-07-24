<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KodePerkiraan extends Model
{
    protected $fillable = [
        'kode',  'nama', 
    ];
    protected $hidden = [];
}
//