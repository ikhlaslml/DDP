@extends('layouts.app')

@section('title', 'Tambah Kategori')

@section('content')
<h4>Tambah Artikel</h4>
<form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Kategori</label>
        <input type="text" name="nama_kategori" class="form-control" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
