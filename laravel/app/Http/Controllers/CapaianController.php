<?php

namespace App\Http\Controllers;

use App\Models\Capaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CapaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $capaians = Capaian::all();
        return view('capaian.index', compact('capaians'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('capaian.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {
         $data = $request->validate([
            'desa'      => 'required',
            'dusun'     => 'required',
            'rw'        => 'required',
            'kelurahan' => 'required',
            'bangunan' => 'required',
            'kk'        => 'required',
            'jiwa'      => 'required',
            'laki'      => 'required',
            'perempuan' => 'required'
        ]);

        Capaian::create($data);
        return redirect()->route('capaian.index')->with('success','Data Capaian berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(capaian $capaian)
    {
         return view('capaian.edit', compact('capaian'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Capaian $capaian)
    {
         $data = $request->validate([
            'desa'      => 'required',
            'dusun'     => 'required',
            'rw'        => 'required',
            'kelurahan' => 'required',
            'bangunan' => 'required',
            'kk'        => 'required',
            'jiwa'      => 'required',
            'laki'      => 'required',
            'perempuan' => 'required'
        ]);

        $capaian->update($data);
        return redirect()->route('capaian.index')->with('success','Data Capaian berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Capaian $capaian)
    {
        
        $capaian->delete();
        return redirect()->route('capaian.index')->with('success','Data Capaian berhasil dihapus');
    }
}
