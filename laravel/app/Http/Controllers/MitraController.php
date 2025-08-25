<?php

namespace App\Http\Controllers;

use App\Models\Mitra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mitras = Mitra::all();
        return view('mitra.index', compact('mitras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('mitra.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $data = $request->validate([
            'nama_mitra' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->file('gambar')->extension();

         // Path absolut ke public_html/uploads
         
        $destinationPath = base_path('../public_html/storage');
        
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        
         // Simpan file ke public_html/uploads
        $request->file('gambar')->move($destinationPath, $fileName);

        // Simpan path relatif ke database
        $data['gambar'] = '' . $fileName;
        
        }

        Mitra::create($data);
        return redirect()->route('mitra.index')->with('success','Mitra berhasil ditambahkan');
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
    public function edit(Mitra $mitra)
    {
        $mitras = Mitra::all();
        return view('mitra.edit', compact('mitra', 'mitras'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, Mitra $mitra)
    {
        $data = $request->validate([
            'nama_mitra' => 'required',
            'gambar' => 'image|mimes:jpg,jpeg,png|max:2048'
        ]);

        if ($request->hasFile('gambar')) {
            if ($mitra->gambar) {
                Storage::disk('public')->delete($mitra->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        $mitra->update($data);
        return redirect()->route('mitra.index')->with('success','Mitra berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mitra $mitra)
    {
        if ($mitra->gambar) {
            Storage::disk('public')->delete($mitra->gambar);
        }
        $mitra->delete();
        return redirect()->route('mitra.index')->with('success','Mitra berhasil dihapus');
    }
}
