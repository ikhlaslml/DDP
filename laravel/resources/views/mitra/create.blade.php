@extends('layouts.app')

@section('title', 'Tambah Mitra')

@section('content')
<h4>Tambah Mitra</h4>
<form action="{{ route('mitra.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Nama Mitra</label>
        <input type="text" name="nama_mitra" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
