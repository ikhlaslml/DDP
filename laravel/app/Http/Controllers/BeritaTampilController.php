<?php

namespace App\Http\Controllers;

use App\Models\Beritaartikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaTampilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Beritaartikel::all();
        return view('Berita.index', compact('beritas'));
    }
    
    public function show($id)
    {
        $beritas = Beritaartikel::findOrFail($id);
        return view('Berita.show', compact('beritas'));
    }
}
