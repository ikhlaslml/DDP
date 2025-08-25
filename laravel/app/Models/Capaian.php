<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Capaian extends Model
{
    protected $table = 'capaiandata';
    protected $fillable = ['desa', 'dusun', 'rw', 'kelurahan', 'bangunan', 'kk','jiwa','kk','jiwa','laki','perempuan'];
}
