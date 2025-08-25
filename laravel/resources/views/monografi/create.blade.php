@extends('layouts.app')

@section('title', 'Tambah Monografi')

@section('content')
<h4>Tambah Monografi</h4>
<form action="{{ route('monografi.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Desa/Kelurahan</label>
        <input type="text" name="desa" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Kota/Kabupaten</label>
        <input type="text" name="kota" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Provinsi</label>
        <input type="text" name="provinsi" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Tahun</label>
        <input type="text" name="tahun" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Ringkasan</label>
        <textarea name="ringkasan" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar" class="form-control">
    </div>
     <div class="mb-3">
        <label>Link</label>
        <input type="text" name="link" class="form-control" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
