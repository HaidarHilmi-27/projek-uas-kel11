<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kampus extends Model
{
    protected $table = 'kampus';
    protected $fillable = [
        'nama', 
        'alamat', 
        'latitude',
        'longtitude', 
    ];
    public $timestamps = false;
}
