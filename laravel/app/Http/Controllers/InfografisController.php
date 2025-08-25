<?php

namespace App\Http\Controllers;

use App\Models\Infografis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InfografisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $infografis = Infografis::all();
        return view('infografis.index', compact('infografis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('infografis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'judul' => 'required',
            'keterangan' => 'required',
            'gambar.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required',
        ]);

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
            $path = $file->store('gambar', 'public');
            $images[] = $path;
        }
        }

       Infografis::create([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
        'gambar' => json_encode($images), // simpan array sebagai JSON
        'link' => $request->link,
    ]);
        return redirect()->route('infografis.index')->with('success','Infografis berhasil ditambahkan');
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
    public function edit(Infografis $infografis)
    {
        $infografis = Infografis::all();
        return view('infografis.edit', compact('infografis', 'infografis'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Infografis $infografis)
    {
        $data = $request->validate([
             'judul' => 'required',
            'keterangan' => 'required',
            'gambar.*' => 'image|mimes:jpg,jpeg,png|max:2048',
            'link' => 'required',
        ]);

       $gambarLama = json_decode($berita->gambar, true) ?? [];

        // Upload gambar baru
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $path = $file->store('gambar', 'public');
                $gambarLama[] = $path;
            }
        }

       $infografis->update([
        'judul' => $request->judul,
        'keterangan' => $request->keterangan,
        'gambar' => json_encode($gambarLama),
         'link' => $request->link,
    ]);
     return redirect()->route('infografis.index')->with('success', 'Infografis berhasil diupdate');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Infografis $infografis)
    {
        if ($infografis->gambar) {
            Storage::disk('public')->delete($infografis->gambar);
        }
        $infografis->delete();
        return redirect()->route('infografis.index')->with('success','Infografis berhasil dihapus');
    }
}
