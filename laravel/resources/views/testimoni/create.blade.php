@extends('layouts.app')

@section('title', 'Tambah testimoni')

@section('content')
<h4>Tambah testimoni</h4>
<form action="{{ route('testimoni.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Tanggal</label>
        <input type="date" name="tanggal" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Isi Testimoni</label>
        <textarea name="isi" class="form-control" required></textarea>
    </div>
    
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
