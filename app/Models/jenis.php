<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    protected $table = 'jenis';
    protected $fillable = [
        'id',
        'nama',
    ];
    public $timestamps = false;
}
