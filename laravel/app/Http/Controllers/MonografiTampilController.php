<?php

namespace App\Http\Controllers;

use App\Models\Monografi;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MonografisTampilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monografis = Monografi::all();
        return view('Monografis.index', compact('monografis'));
    }
}
