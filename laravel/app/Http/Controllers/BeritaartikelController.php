<?php

namespace App\Http\Controllers;

use App\Models\Beritaartikel;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaartikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Beritaartikel::all();
        return view('berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::all();
        return view('berita.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'judul_artikel' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'tanggal' => 'required',
            'penulis' => 'required',
            'readmore' => 'required',
            'isi_artikel' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Beritaartikel::create($data);
        return redirect()->route('beritaartikel.index')->with('success','Berita berhasil ditambahkan');
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
    public function edit(Beritaartikel $beritaartikel)
    {
        $kategoris = Kategori::all();
        return view('berita.edit', compact('beritaartikel', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Beritaartikel $beritaartikel)
    {
        $data = $request->validate([
            'judul_artikel' => 'required',
            'kategori_id' => 'required|exists:kategori,id',
            'tanggal' => 'required',
            'penulis' => 'required',
            'readmore' => 'required',
            'isi_artikel' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($beritaartikel->gambar) {
                Storage::disk('public')->delete($beritaartikel->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $beritaartikel->update($data);
        return redirect()->route('berita.index')->with('success','Berita berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beritaartikel $beritaartikel)
    {
        if ($beritaartikel->gambar) {
            Storage::disk('public')->delete($beritaartikel->gambar);
        }
        $beritaartikel->delete();
        return redirect()->route('beritaartikel.index')->with('success','Berita berhasil dihapus');
    }
}
