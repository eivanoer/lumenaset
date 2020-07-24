<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubPerkiraan extends Model
{
    protected $fillable = [
        'kode',  'nama', 
    ];
    protected $hidden = [];
}
//