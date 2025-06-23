<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    protected $table = 'kendaraan';
    protected $fillable = [
        'merk', 
        'pemilik', 
        'nopol', 
        'tahun_beli', 
        'deskripsi', 
        'jenis_kendaraan_id',
    ];
    public $timestamps = false;
}
