<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambar = Gambar::all();
        $testimoni = Testimoni::all();
        return view('Galeri.index', compact('gambar','testimoni'));
    }
}
