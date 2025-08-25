@extends('layouts.app')

@section('title', 'Edit Monografi')

@section('content')
<h4>Edit Monografi</h4>
<form action="{{ route('monografi.update', $monografi->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Desa/Kelurahan</label>
        <input type="text" name="desa" class="form-control" value="{{ $monografi->desa }}" required>
    </div>
     <div class="mb-3">
        <label>Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" value="{{ $monografi->kecamatan }}" required>
    </div>
     <div class="mb-3">
        <label>Kota/Kabupaten</label>
        <input type="text" name="kota" class="form-control" value="{{ $monografi->kota }}" required>
    </div>
     <div class="mb-3">
        <label>Provinsi</label>
        <input type="text" name="provinsi" class="form-control" value="{{ $monografi->provinsi }}" required>
    </div>
     <div class="mb-3">
        <label>Tahun</label>
        <input type="text" name="tahun" class="form-control" value="{{ $monografi->tahun }}" required>
    </div>
     <div class="mb-3">
        <label>Ringkasan</label>
        <textarea name="ringkasan" class="form-control" required>{{ $monografi->ringkasan }}</textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
        @if($monografi->gambar)
        <img src="{{ asset('storage/'.$monografi->gambar) }}" width="100" class="mt-2">
        @endif
    </div>
    <div class="mb-3">
        <label>Link</label>
        <input type="text" name="link" class="form-control" value="{{ $monografi->link }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
