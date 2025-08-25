<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monografi extends Model
{
    protected $table = 'monografi';
    protected $fillable = ['desa', 'kecamatan', 'kota', 'provinsi', 'tahun','ringkasan', 'gambar','link'];
}


