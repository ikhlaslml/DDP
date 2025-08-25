@extends('layouts.app')

@section('title', 'Edit Kategori')

@section('content')
<h4>Edit Kategori</h4>
<form action="{{ route('kategori.update', $kategori->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="nama_kategori" class="form-control" value="{{ $kategori->nama_kategori }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
