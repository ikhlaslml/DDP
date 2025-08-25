@extends('layouts.app')

@section('title', 'Monografi')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Monografi</h4>
        <a href="{{ route('monografi.create') }}" class="btn btn-primary">Tambah Monografi</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Desa/Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten/Kota</th>
                <th>Provinsi</th>
                <th>Tahun</th>
                <th>Ringkasan</th>    
                <th>Gambar</th>
                <th>Link</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monografis as $monografi)
            <tr>
                <td>{{ $monografi->desa }}</td>
                <td>{{ $monografi->kecamatan }}</td>
                <td>{{ $monografi->kota }}</td>
                <td>{{ $monografi->provinsi }}</td>
                <td>{{ $monografi->tahun }}</td>
                <td>{{ $monografi->ringkasan }}</td>
                <td>
                    @if($monografi->gambar)
                    <img src="{{ asset('storage/'.$monografi->gambar) }}" width="80">
                    @endif
                </td>
                <td>{{ $monografi->link }}</td>
                <td>
                    <a href="{{ route('monografi.edit', $monografi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('monografi.destroy', $monografi->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
