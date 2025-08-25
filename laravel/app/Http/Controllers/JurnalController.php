<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurnals = Jurnal::all();
        return view('jurnal.index', compact('jurnals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jurnal.create');
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

        Jurnal::create($data);
        return redirect()->route('jurnal.index')->with('success','Jurnal berhasil ditambahkan');
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
    public function edit(Jurnal $jurnal)
    {
        $jurnals = Jurnal::all();
        return view('jurnal.edit', compact('jurnal', 'jurnals'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Jurnal $jurnal)
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
            if ($jurnal->gambar) {
                Storage::disk('public')->delete($jurnal->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $jurnal->update($data);
        return redirect()->route('jurnal.index')->with('success','Jurnal berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jurnal $jurnal)
    {
        if ($jurnal->gambar) {
            Storage::disk('public')->delete($jurnal>gambar);
        }
        $jurnal->delete();
        return redirect()->route('jurnal.index')->with('success','Jurnal berhasil dihapus');
    }
}
