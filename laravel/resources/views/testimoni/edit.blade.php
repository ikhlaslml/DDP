@extends('layouts.app')

@section('title', 'Edit testimoni')

@section('content')
<h4>Edit testimoni</h4>
<form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="{{ $testimoni->nama }}" required>
    </div>
    <div class="mb-3">
        <label>Jabatan</label>
        <input type="text" name="jabatan" class="form-control" value="{{ $testimoni->jabatan }}" required>
    </div>
    <div class="mb-3">
        <label>Tanggall</label>
        <input type="date" name="tanggal" class="form-control" value="{{ $testimoni->tanggal }}" required>
    </div>
    <div class="mb-3">
        <label>Isi testimoni</label>
        <textarea name="isi" class="form-control" required>{{ $testimoni->isi }}</textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($testimoni->gambar)
        <img src="{{ asset('storage/'.$testimoni->gambar) }}" width="100" class="mt-2">
        @endif
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
