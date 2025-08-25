@extends('layouts.app')

@section('title', 'Tambah Pencapaian Data')

@section('content')
<h4>Tambah Pencapaian Data</h4>
<form action="{{ route('capaian.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Desa</label>
        <input type="text" name="desa" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Dusun</label>
        <input type="text" name="dusun" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>RW</label>
        <input type="text" name="rw" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Kelurahan</label>
        <input type="text" name="kelurahan" class="form-control" required>
    </div>
     <div class="mb-3">
        <label>Bangunan</label>
        <input type="text" name="bangunan" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>KK</label>
        <input type="text" name="kk" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Jiwa</label>
        <input type="text" name="jiwa" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Laki-laki</label>
        <input type="text" name="laki" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Perempuan</label>
        <input type="text" name="perempuan" class="form-control" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
@endsection
