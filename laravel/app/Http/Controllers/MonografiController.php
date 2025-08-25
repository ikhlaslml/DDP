<?php

namespace App\Http\Controllers;

use App\Models\Monografi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MonografiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $monografis = Monografi::all();
        return view('monografi.index', compact('monografis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('monografi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'desa' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'tahun' => 'required',
            'ringkasan' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Monografi::create($data);
        return redirect()->route('monografi.index')->with('success','Monografi berhasil ditambahkan');
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
    public function edit(Monografi $monografi)
    {
        $monografis = Monografi::all();
        return view('monografi.edit', compact('monografi', 'monografis'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Monografi $monografi)
    {
        $data = $request->validate([
           'desa' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'tahun' => 'required',
            'ringkasan' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required'
        ]);

        if ($request->hasFile('gambar')) {
            if ($monografi->gambar) {
                Storage::disk('public')->delete($monografi->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $monografi->update($data);
        return redirect()->route('monografi.index')->with('success','Monografi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Monografi $monografi)
    {
        if ($monografi->gambar) {
            Storage::disk('public')->delete($monografi->gambar);
        }
        $monografi->delete();
        return redirect()->route('monografi.index')->with('success','Monografi berhasil dihapus');
    }
}
