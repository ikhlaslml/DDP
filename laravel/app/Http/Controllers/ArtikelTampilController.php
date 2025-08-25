<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelTampilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::all();
        return view('opini.index', compact('artikels'));
    }
    public function show($id)
    {
        $artikels = Artikel::findOrFail($id);
        return view('opini.show', compact('artikels'));
    }
}
