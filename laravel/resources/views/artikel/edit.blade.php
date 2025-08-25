@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
<h4>Edit Artikel</h4>
<form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul_artikel" class="form-control" value="{{ $artikel->judul_artikel }}" required>
    </div>
   <div class="mb-3">
        <label>Kategori</label>
        <select name="kategori_id" class="form-control">
            @foreach($kategoris as $kategori)
                <option value="{{ $kategori->id }}" {{ $kategori->id == $artikel->kategori_id ? 'selected' : '' }}>
                    {{ $kategori->nama_kategori }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label>Tanggall</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $artikel->tanggal }}" required>
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" value="{{ $artikel->penulis }}" required>
    </div>
    <div class="mb-3">
        <label>Readmore</label>
        <input type="text" name="readmore" class="form-control" value="{{ $artikel->readmore }}" required>
    </div>
    <div class="mb-3">
        <label>Isi Artikel</label>
        <textarea name="isi_artikel" class="form-control" required>{{ $artikel->isi_artikel }}</textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($artikel->gambar)
        <img src="{{ asset('storage/'.$artikel->gambar) }}" width="100" class="mt-2">
        @endif
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
