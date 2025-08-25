@extends('layouts.app')

@section('title', 'Edit Pencapaian Data')

@section('content')
<h4>Edit Pencapaian Data</h4>
<form action="{{ route('capaian.update', $capaian->id) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PUT')
    <div class="mb-3">
        <label>Desa</label>
        <input type="text" name="desa" class="form-control" value="{{ $capaian->desa }}" required>
    </div>
      <div class="mb-3">
        <label>Dusun</label>
        <input type="text" name="dusun" class="form-control" value="{{ $capaian->dusun }}" required>
    </div>
    <div class="mb-3">
        <label>RW</label>
        <input type="text" name="rw" class="form-control"  value="{{ $capaian->rw }}" required>
    </div>
    <div class="mb-3">
        <label>Kelurahan</label>
        <input type="text" name="kelurahan" class="form-control" value="{{ $capaian->kelurahan }}" required>
    </div>
    <div class="mb-3">
        <label>Bangunan</label>
        <input type="text" name="bangunan" class="form-control" value="{{ $capaian->bangunan }}" required>
    </div>
    <div class="mb-3">
        <label>KK</label>
        <input type="text" name="kk" class="form-control" value="{{ $capaian->kk }}" required>
    </div>
    <div class="mb-3">
        <label>Jiwa</label>
        <input type="text" name="jiwa" class="form-control" value="{{ $capaian->jiwa }}" required>
    </div>
    <div class="mb-3">
        <label>Laki-laki</label>
        <input type="text" name="laki" class="form-control" value="{{ $capaian->laki }}" required>
    </div>
    <div class="mb-3">
        <label>Perempuan</label>
        <input type="text" name="perempuan" class="form-control" value="{{ $capaian->perempuan }}" required>
    </div>
    <button class="btn btn-primary">Update</button>
</form>
@endsection
