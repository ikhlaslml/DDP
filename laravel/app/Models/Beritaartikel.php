<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beritaartikel extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul_artikel', 'kategori_id', 'tanggal', 'penulis', 'readmore', 'isi_artikel', 'gambar'];
}


