<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use App\Models\Monografi;
use App\Models\Beritaartikel;
use App\Models\Infografis;
use App\Models\Gambar;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        $mitras = Mitra::all();
        $monografis = Monografi::latest()->take(5)->get();
        $testimonis = Testimoni::latest()->take(5)->get();
        $beritas = Beritaartikel::latest()->take(2)->get();
        $infos = Infografis::all();
        $beritalain = Beritaartikel::latest()->take(4)->get();
        $gambars = Gambar::latest()->take(4)->get();
        return view('frontend.index', compact('mitras','monografis','beritas','infos','beritalain','gambars','testimonis'));
    }

    public function show($id)
    {
        $artikel = Artikel::with('kategori')->findOrFail($id);
        return view('frontend.show', compact('artikel'));
    }
}
