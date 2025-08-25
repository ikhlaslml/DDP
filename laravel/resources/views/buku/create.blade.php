@extends('layouts.app')

@section('title', 'Tambah buku')

@section('content')
<h4>Tambah buku</h4>
<form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tahun</label>
        <textarea name="readmore" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Isi buku</label>
        <textarea name="ringkasan" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>link</label>
        <textarea name="link" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
