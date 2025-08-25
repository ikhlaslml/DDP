<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gambars = Gambar::all();
        return view('gambar.index', compact('gambars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Gambar::create($data);
        return redirect()->route('gambar.index')->with('success','Gambar berhasil ditambahkan');
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
    public function edit(Gambar $gambar)
    {
        $gambars = Gambar::all();
        return view('gambar.edit', compact('gambar', 'gambars'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Gambar $gambar)
    {
        $data = $request->validate([
            'judul' => 'required',
            'tanggal' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($gambar->gambar) {
                Storage::disk('public')->delete($gambar->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $gambar->update($data);
        return redirect()->route('gambar.index')->with('success','Mitra berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gambar $gambar)
    {
        if ($gambar->gambar) {
            Storage::disk('public')->delete($gambar->gambar);
        }
        $gambar->delete();
        return redirect()->route('gambar.index')->with('success','Gambar berhasil dihapus');
    }
}
