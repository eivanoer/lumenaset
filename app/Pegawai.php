<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'api_token',
    ];
    protected $hidden = [];
}