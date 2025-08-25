<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    protected $table = 'infografis';
    protected $fillable = ['judul','keterangan', 'gambar','link'];
}