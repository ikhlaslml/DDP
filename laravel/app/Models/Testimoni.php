<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    protected $table = 'testimoni';
    protected $fillable = ['nama', 'jabatan', 'tanggal', 'isi', 'gambar'];
}
