@extends('layouts.app')

@section('title', 'Tambah Gambar')

@section('content')
<h4>Tambah Gambar</h4>
<form action="{{ route('gambar.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
