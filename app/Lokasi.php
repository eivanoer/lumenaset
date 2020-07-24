<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'longitude', 'latitude', 
    ];
    protected $hidden = [];
}
//