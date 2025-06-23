<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaParkir extends Model
{
    protected $table = 'area_parkir';
    protected $fillable = [
        'nama',
        'kapasitas',
        'keterangan',
        'kampus_id',
    ];
    public $timestamps = false;
}
