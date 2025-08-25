<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bukus = Buku::all();
        return view('buku.index', compact('bukus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'readmore' => 'required',
            'ringkasan' => 'required',
            'link' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Buku::create($data);
        return redirect()->route('buku.index')->with('success','Buku berhasil ditambahkan');
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
    public function edit(Buku $buku)
    {
        $bukus = Buku::all();
        return view('buku.edit', compact('buku', 'bukus'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Buku $buku)
    {
        $data = $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'readmore' => 'required',
            'ringkasan' => 'required',
            'link' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($buku->gambar) {
                Storage::disk('public')->delete($buku->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $buku->update($data);
        return redirect()->route('buku.index')->with('success','Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        if ($buku->gambar) {
            Storage::disk('public')->delete($buku->gambar);
        }
        $buku->delete();
        return redirect()->route('buku.index')->with('success','Buku berhasil dihapus');
    }
}
