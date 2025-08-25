@extends('layouts.app')

@section('title', 'Tambah Artikel')

@section('content')
<h4>Tambah Artikel</h4>
<form action="{{ route('beritaartikel.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul_artikel" class="form-control" required>
    </div>
    <div class="form-group">
            <label>Kategori Artikel</label>
            <select name="kategori_id" class="form-control" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategoris as $kategori)
                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <label>Tanggall</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Readmore</label>
        <textarea name="readmore" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Isi Artikel</label>
        <textarea name="isi_artikel" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
