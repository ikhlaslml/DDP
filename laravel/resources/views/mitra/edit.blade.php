@extends('layouts.app')

@section('title', 'Edit Mitra')

@section('content')
<h4>Edit Mitra</h4>
<form action="{{ route('mitra.update', $mitra->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Nama Mitra</label>
        <input type="text" name="nama_mitra" class="form-control" value="{{ $mitra->nama_mitra }}" required>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($mitra->gambar)
        <img src="{{ asset('storage/'.$mitra->gambar) }}" width="100" class="mt-2">
        @endif
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
