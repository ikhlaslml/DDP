<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('testimoni.index', compact('testimonis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'tanggal' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Testimoni::create($data);
        return redirect()->route('testimoni.index')->with('success','Testimoni berhasil ditambahkan');
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
    public function edit(Testimoni $testimoni)
    {
        $testimonis = Testimoni::all();
        return view('testimoni.edit', compact('testimoni', 'testimonis'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Testimoni $testimoni)
    {
        $data = $request->validate([
           'nama' => 'required',
            'jabatan' => 'required',
            'tanggal' => 'required',
            'isi' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($testimoni->gambar) {
                Storage::disk('public')->delete($testimoni->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $testimoni->update($data);
        return redirect()->route('testimoni.index')->with('success','Testimoni berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimoni $testimoni)
    {
        if ($testimoni->gambar) {
            Storage::disk('public')->delete($testimoni->gambar);
        }
        $testimoni->delete();
        return redirect()->route('testimoni.index')->with('success','Testimoni berhasil dihapus');
    }
}
