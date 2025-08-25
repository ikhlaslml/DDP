<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurnalTampilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurnals = Jurnal::all();
        return view('Jurnal.index', compact('jurnals'));
    }
    
        public function show($id)
    {
        $jurnals = Jurnal::findOrFail($id);
        return view('Jurnal.show', compact('jurnals'));
    }
}
