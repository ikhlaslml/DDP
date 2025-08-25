@extends('layouts.app')

@section('title', 'Edit Gambar')

@section('content')
<h4>Edit Gambar</h4>
<form action="{{ route('gambar.update', $gambar->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama Gambar</label>
        <input type="text" name="judul" class="form-control" value="{{ $gambar->judul }}" required>
    </div>
     <div class="mb-3">
        <label>Tanggal</label>
        <input type="text" name="tanggal" class="form-control" value="{{ $gambar->tanggal }}" required>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($gambar->gambar)
        <img src="{{ asset('storage/'.$gambar->gambar) }}" width="100" class="mt-2">
        @endif
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
